import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Laravel EasyForms",
  description: "Documentation for Laravel EasyForms",
  srcDir: './src',
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Getting Started', link: '/getting-started/about' }
    ],

    sidebar: [
      {
        text: 'Getting Started',
        items: [
          { text: 'About', link: '/getting-started/about' },
          { text: 'Installation', link: '/getting-started/installation' },
        ]
      },
      {
        text: 'Concepts',
        items: [
          { text: 'General', link: '/concepts/general' },
          { text: 'Forms', link: '/concepts/forms' },
          { text: 'Fields', link: '/concepts/fields' },
          { text: 'Actions', link: '/concepts/actions' },
          { text: 'Elements', link: '/concepts/elements' },
          { text: 'Enums', link: '/concepts/enums' },

        ]
      },
      {
        text: 'Examples',
        items: [
          { text: 'Markdown Examples', link: '/markdown-examples' },
          { text: 'Runtime API Examples', link: '/api-examples' }
        ]
      }
    ],
    socialLinks: [
      { icon: 'github', link: 'https://github.com/BoredLunatic/Laravel-EasyForms' }
    ]
  }
})