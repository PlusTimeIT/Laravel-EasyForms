<template>

    <v-tooltip top :disabled="isUndefined(loadedButton.tooltip) || loadedButton.tooltip === null">
        <template v-slot:activator="{ on }">
            <v-btn
                :class="loadedButton.class"
                :color="loadedButton.color"
                @click="buttonClick(identifier)"
                :rounded="loadedButton.rounded"
                :tile="loadedButton.tile"
            >
                {{ loadedButton.text }}
                <easy-icon
                    v-if="displayButtonIcon()"
                    :icon="loadedButton.icon"
                >
                </easy-icon>
            </v-btn>
        </template>
        <span>{{ loadedButton.tooltip }}</span>
    </v-tooltip>

</template>

<script>

  import {FormMixin} from '../mixins/FormMixins';
  import EasyIcon from '../parts/Icon.vue';

  export default {
    name: 'Button',
    components: {
      EasyIcon
    },
    mixins: [FormMixin],
    props: {
      button: {
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
        loadedButton: false,
      };
    },
    created() {
        console.log( 'BUTTON', this.button );
        this.loadedButton = this.button;
    },
    methods: {
      buttonClick(identifier){
        this.$emit('click', identifier);
      },
      buttonIconText: function() {
        return !this.isUndefined(this.loadedButton.icon.tooltip) ? this.loadedButton.icon.tooltip : 'Submit';
      },
      buttonIconMdi: function() {
        return !this.isUndefined(this.loadedButton.icon.icon) ? this.loadedButton.icon.icon : '';
      },
      prepareButtonIconProps: function() {
        const result = {};
        if (this.displayButtonIcon()) {
          result.color = !this.isUndefined(this.loadedButton.icon.color) ?
          this.loadedButton.icon.color : 'primary';

          result.class = !this.isUndefined(this.loadedButton.icon.class) ?
          this.loadedButton.icon.class : '';

          if (!this.isUndefined(this.loadedButton.icon.size) && this.loadedButton.icon.size !== null) {
            result[this.loadedButton.icon.size] = true;
          }
        }
        return result;
      },
      displayButtonIcon: function() {
        return !this.isUndefined(this.loadedButton.icon) ? true : false;
      },
    }
  }

</script>
