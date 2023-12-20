#!/bin/bash

set -e

# ANSI color codes
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
GREEN='\033[0;32m'
NC='\033[0m' # No Color

# Get the current version from composer.json
VERSION=$(php -r "echo json_decode(file_get_contents('composer.json'))->version;")
PATCHTYPE=${2:-"patch"}

update_version() {
    local version_type=$1
    local updated_version

    case "$version_type" in
        "patch")
            updated_version=$(composer version --patch)
            ;;
        "minor")
            updated_version=$(composer version --minor)
            ;;
        "major")
            updated_version=$(composer version --major)
            ;;
        *)
            echo "Invalid version type. Please use 'patch', 'minor', or 'major'. Supplied: $version_type"
            exit 1
            ;;
    esac

    echo $updated_version
}

header() {
    echo -e "${YELLOW}"
    cat << "EOF"
:::      :::::::::: ::::::::::
:+:      :+:        :+:
+:+      +:+        +:+
+#+      +#++:++#   :#::+::#
+#+      +#+        +#+
#+#      #+#        #+#
######## ########## ###
EOF
    echo -e "${NC}"
    echo -e "${YELLOW}$1${NC}"
}

task() {
    echo -e "${BLUE}----------------------------------------------${NC}"
    echo -e "${BLUE}$1${NC}"
    echo -e "${BLUE}----------------------------------------------${NC}"
}

completed() {
    echo -e "${GREEN}$1${NC}"
}

run_section() {
    if [ "$interactive" == "true" ]; then
        read -p "Do you want to run this section? (y/n): " choice
        if [ "$choice" == "n" ]; then
            echo "Skipping this section."
            return
        fi
    fi

    eval "$1"
}

# Main Script
interactive="true"

for arg in "$@"; do
    case "$arg" in
        --non-interactive)
            interactive="false"
            ;;
    esac
done

header "Starting Composer Package Build - $VERSION"

tasks=("Running Tests" "Prettifying" "Trimming Unused Composer Packages" "Deploy to GitHub" "Create Packagist Tag" "Update Version - $PATCHTYPE")
commands=("composer test" "composer format" "composer trim:packages" "git add . && git commit -m 'update: $VERSION' && git push" "git tag $VERSION && git push origin $VERSION" "update_version $PATCHTYPE")

for ((i=0; i<${#tasks[@]}; i++)); do
    task "$((i+1))/${#tasks[@]} ${tasks[i]}...."
    run_section "${commands[i]}"
    completed "${tasks[i]} completed."
done

completed "Build completed."