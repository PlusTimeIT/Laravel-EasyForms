<template>

    <v-tooltip top :disabled="isUndefined(loadedIcon.tooltip) || loadedIcon.tooltip === null">
        <template v-slot:activator="{ on }">
            <v-icon
                v-on="on"
                @click="iconClick(loadedIdentifier)"
                dismissible
            >
            {{ loadedIcon.icon }}
            </v-icon>
        </template>
        <span>{{ loadedIcon.tooltip }}</span>
    </v-tooltip>

</template>

<script>

  import {FormMixin} from '../mixins/FormMixins';

  export default {
    name: 'Icon',
    mixins: [FormMixin],
    props: {
      icon: {
        type: Object,
        default: () => ({}),
      },
      identifier: {
        type: String|Number,
        default: '',
      },
    },
    data() {
      return {
        loadedIcon: false,
        loadedIdentifier: false,
      };
    },
    created() {
        console.log( 'BUTTON', this.icon );
        this.loadedIcon = this.icon;
        this.loadedIdentifier = this.identifier;
    },
    methods: {
      iconClick(identifier){
        this.$emit('click', identifier);
      },
      iconIconText: function() {
        return !this.isUndefined(this.loadedIcon.icon.tooltip) ? this.loadedIcon.icon.tooltip : 'Submit';
      },
      iconIconMdi: function() {
        return !this.isUndefined(this.loadedIcon.icon.icon) ? this.loadedIcon.icon.icon : '';
      },
      prepareButtonIconProps: function() {
        const result = {};
        if (this.displayButtonIcon()) {
          result.color = !this.isUndefined(this.loadedIcon.icon.color) ?
          this.loadedIcon.icon.color : 'primary';

          result.class = !this.isUndefined(this.loadedIcon.icon.class) ?
          this.loadedIcon.icon.class : '';

          if (!this.isUndefined(loadedIcon.icon.size) && this.loadedIcon.icon.size !== null) {
            result[this.loadedIcon.icon.size] = true;
          }
        }
        return result;
      },
      displayButtonIcon: function() {
        return !this.isUndefined(this.loadedIcon.icon) ? true : false;
      },
    }
  }

</script>
