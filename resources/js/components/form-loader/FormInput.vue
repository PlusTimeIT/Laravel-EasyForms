<template>
  <v-col :cols="cols" :offset="offset" class="pt-0 pb-0" v-if="displayCol()">
    <validation-provider
      v-slot="{ errors }"
      :name="fieldData.name"
      tag="div"
    >
      <component
        :is="fieldData.component"
        v-model="fieldData.value"
        v-bind="prepareProps(errors)"
      >
        <div v-if="fieldData.component == 'v-radio-group'">
            <v-radio
                v-for="(item, index) in fieldData.items"
                :key="index"
                :label="item.label"
                :value="item.value"
                :color="item.color"
            ></v-radio>
        </div>

        <p class="mb-3 mt-4" v-if="fieldData.component == 'h2'">
          {{ fieldData.value }}
        </p>
        <v-tooltip v-if="fieldData.help !== ''" slot="append" bottom>
            <template #activator="{ on }">
                <v-icon
                    slot="activator"
                    color="primary"
                    dark v-on="on"
                >
                    mdi-help-box
                </v-icon>
            </template>
            <span>{{ fieldData.help }} </span>
        </v-tooltip>

        <template
            v-if="!is_undefined( fieldData.counter ) && fieldData.counter"
            v-slot:counter="{ props }"
        >
            <v-counter
                v-bind="props"
                :value="fieldData.value.trim().split(' ').length"
            ></v-counter>
        </template>
      </component>
    </validation-provider>
  </v-col>
</template>

<script>
import {ValidationProvider} from 'vee-validate';
import {FormMixin} from './FormMixins';

export default {
  $validates: true,
  mixins: [FormMixin],
  components: {
    ValidationProvider,
  },
  props: {
    form_field: {
      type: Object,
      default: () => ({}),
    },
    cols: {
      Type: String,
      default: '6',
    },
    additional_form_data: {
      type: Object,
      default: () => ({}),
    },
    offset: {
      Type: String,
      default: '',
    },
    value: {
      default: '',
    },
  },
  watch: {
    fieldData: {
      handler: function(val) {
        this.$emit('update', val.value);
        this.$emit('field_update', val);
        this.$emit('input', this.fieldData);
      },
      deep: true,
    },
  },
  data: () => ({
    password: false,
    confirm_password: false,
    menu: false,
    dates: [],
    fieldData: {},
  }),
  created() {
    this.fieldData = this.value;
  },
  computed: {
    additional_form: function() {
      return this.additional_form_data;
    },
  },
  methods: {
    displayCol() {
      if ( this.is_undefined(this.fieldData.type) ) return false;
      if ( this.fieldData.type == 'hidden') return false;
      return true;
    },
    prepareProps(errors) {
      let result = {};
      const field = this.fieldData;
      result['error-messages'] = errors;
      result['label'] = this.prepareLabel();
      result['outlined'] = this.fieldData.outlined;
      result['dense'] = this.fieldData.dense;

      if (!this.is_undefined(field.help) && field.help !== '') {
        // result['prepend-inner-icon'] = 'mdi-help-box';
      }

      if (!this.is_undefined(field.type) && field.type == 'time') {
        result['populate'] = field.value;
        result['ampm_in_title'] = true;
        result['no_title'] = false;
        result['class'] = 'mt-2';
      }

      if (!this.is_undefined(field.type) && field.type == 'file-input') {
        result['show-size'] = true;
        result['accept'] = field.accept;
      }

      if (!this.is_undefined(field.type) && (field.type == 'select' || field.type == 'autocomplete')) {
        result['selected'] =
        !this.is_undefined(field.integer) && field.integer ? parseInt(field.value) : field.value;


        const selectItems = field.items;
        if (!this.is_undefined(field.any_field) && field.any_field) {
          const anyfield = {};
          anyfield[field.item_value] = 'any';
          anyfield[field.item_text] = 'Any';
          if ( ! selectItems.some((e) => e[field.item_value] === 'any') ) {
            selectItems.unshift( anyfield );
          }
        }
        result['items'] = selectItems;
        result['item-text'] = field.item_text;
        result['item-value'] = field.item_value;
        result['chips'] = field.chips;
        result['data-vv-name'] = 'select';
      }
      if ( !this.is_undefined(field.type) && field.type == 'hidden' ) {
        result['class'] = 'hidden-input';
      }

      if (!this.is_undefined(field.component_type) && field.component_type == 'password') {
        result['type'] = field.component_type;
      }

      if (!this.is_undefined(field.component) && field.component == 'date-picker') {
        result['close-on-content-click'] = false;
      }
      result['controls'] = false;
      if (!this.is_undefined(field.close_on_content_click)) {
        result['close-on-content-click'] = field.close_on_content_click;
      }

      if (!this.is_undefined(field.controls)) {
        result['controls'] = field.controls;
      }


      if (!this.is_undefined(field.step)) {
        result['step'] = field.step;
      }

      if (!this.is_undefined(field.component_type) &&
          field.component_type !== '') {
        result['type'] = field.component_type;
      }

      if (!this.is_undefined(field.min)) {
        result['min'] = field.min;
      }

      if (!this.is_undefined(field.max)) {
        result['max'] = field.max;
      }

      if (!this.is_undefined(field.placeholder)) {
        result['placeholder'] = field.placeholder;
      }

      if (!this.is_undefined(field.readonly)) {
        result['readonly'] = field.readonly;
      }

      if (!this.is_undefined(field.multiple)) {
        result['multiple'] = field.multiple;
      }

      if (!this.is_undefined(field.clearable)) {
        result['clearable'] = field.clearable;
      }

      if (!this.is_undefined(field.counter)) {
        result['counter'] = field.counter;
      }

      if (!this.is_undefined(field.maxlength)) {
        result['maxlength'] = field.maxlength;
      }

      if (!this.is_undefined(this.additional_form_data)) {
        result['additional_form_data'] = this.additional_form;
      }

      if (field.component == 'h2') {
        result = {'v-html': field.value};
      }
      return result;
    },
    prepareLabel() {
      let label = !this.is_undefined(this.fieldData.label) ?
        this.fieldData.label :
        this.fieldData.name;

      if (!this.is_undefined(this.fieldData.required) && this.fieldData.required) {
        label += ' ( * required )';
      } else if (!this.is_undefined(this.fieldData.readonly) && this.fieldData.readonly) {
        label += ' ( readonly )';
      } else {
        label += ' ( optional )';
      }

      return label;
    },
  },
};
</script>

<style>
.v-select__selections
{
  margin-top: 3px !important;
  margin-bottom: 2px !important;
}
.v-select.v-input--dense .v-chip
{
  margin-bottom: 2px !important;
}
.hidden-input
{
  display: none;
}
</style>
