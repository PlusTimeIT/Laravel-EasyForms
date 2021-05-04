<template>

<v-row>
    <v-form v-if="loadedFormData.form_type == 'input'" v-bind="formProps()" ref="loadedForm" :key="updateForm" class="mx-auto w-100">
        <v-col cols="12">
            <v-row>
                <easy-input
                    v-for="(field, index_f) in asyncFieldList"
                    :key="index_f"
                    v-model="fieldList[index_f]"
                    :cols="getInputCols(field)"
                    :additional_form_data="loadedAdditionalFormData"
                    @field_update="updateField"
                >
                </easy-input>
            </v-row>
            <v-row v-if="displayButton">
                <v-col v-for="( button, index ) in loadedFormData.buttons" :key="index">
                    <easy-button :button="button" :identifier="index" @click="buttonAction( button )"></easy-button>
                </v-col>
            </v-row>
        </v-col>
    </v-form>
</v-row>

</template>

<script>

import {FormMixin} from '../mixins/FormMixins';
import EasyInput from '../parts/Input.vue';
import EasyButton from '../parts/Button.vue';


// This form emits the current events
// @loading - boolean - whether the form is in a loading state
// @reset - boolean - the form has been reset
//

export default {
  name: 'InputForm',
  components: {
    EasyInput,
    EasyButton
  },
  mixins: [FormMixin],
  props: {
    additional_form_data: {
      type: Object,
      default: () => ({}),
    },
    additional_load_form_data: {
      type: Object,
      default: () => ({}),
    },
    cols: {
      type: Number,
      default: 12,
    },
    sm: {
      type: Number,
      default: 12,
    },
    md: {
      type: Number,
      default: 12,
    },
    lg: {
      type: Number,
      default: 12,
    },
    form: {
      type: Object,
      default: () => ({}),
    },
  },
  data() {
    return {
      fieldList: {},
      formLoading: true,
      formLoaded: true,
      loadedFormName: '',
      loadedFormData: false,
      originalFormData: false,
      updateForm: 0,
    };
  },
  asyncComputed: {
    asyncFieldList() {
      const newFieldList = {};
      const _this = this;
      if( ! this.isUndefined(this.fieldList) ) {
        Object.keys(this.fieldList).forEach((field) => {
            const thisField = _this.fieldList[field];

            if (!_this.isUndefined(thisField.hide)) {
            if (!_this.isUndefined(thisField.show) && _this.isObject(thisField.show)) {
                Object.keys(thisField.show).forEach((value) => {
                if (!_this.isUndefined(_this.fieldList[value].value) && _this.fieldList[value].value === thisField.show[value]) {
                    newFieldList[field] = thisField;
                }
                });
            }
            } else {
            newFieldList[field] = thisField;
            }
        });

        return newFieldList;
      }
      return [];
    },
  },
  computed: {

    loadedAdditionalFormData: function() {
      return this.additional_form_data;
    },
    loadedAdditionalLoadFormData: function() {
      return this.additional_load_form_data;
    },
    loadedIdentifier: function() {
      return this.identifier;
    },
    displayButton: function() {
      if (!this.formLoaded || !this.loadedFormData) return false;
      return this.isUndefined(this.loadedFormData.buttons) || !this.isArray(this.loadedFormData.buttons) || this.loadedFormData.buttons.length === 0 ?
        false :
        true;
    },
  },
  watch: {
    fieldList: {
      handler: function() {
        this.$asyncComputed.asyncFieldList.update();
      },
      deep: true,
    },
    formLoading: function(val) {
      this.$emit('loading', val);
    },
  },
  async created() {
    if ( this.isObject( this.form ) ) {

      const _this = this;
      this.loadedFormName = this.form.name;
      this.formLoaded = true;
      this.loadedFormData = this.form;
      this.fieldList = this.loadedFormData.fields;
      this.originalFormData = {...this.loadedFormData};
      this.formLoading = false;
    }
  },
  methods: {
    updateField(event) {
      const fieldIndex = this.fieldList.findIndex( (element) => element.name == event.name );
      this.fieldList[fieldIndex] = event;
    },
    resetForm(triggerAlerts = true) {
      // clear data
      this.$refs.loadedForm.reset();

      // repopulate
      this.loadedFormData = {...this.originalFormData};
      this.fieldList = [...this.originalFormData.fields];
      this.$emit('reset', true);
      this.formLoading = false;
    },
    cancelForm() {
      this.$emit('cancelled', true);
      this.formLoading = false;
    },
    formProps: function() {
      const result = {};
      if (!this.loadedFormData) return result;
      if (!this.isUndefined(this.loadedFormData.axios) && !this.isUndefined(this.loadedFormData.axios.multiPart) && this.loadedFormData.axios.multiPart) {
        result['enctype'] = 'application/x-www-form-urlencoded';
      }
      return result;
    },
    getInputCols: function(field) {
      return this.isUndefined(field.cols) ? 12 : field.cols;
    },
    async buttonAction( button ) {
      this.formLoading = true;
      if ( !this.isUndefined( button.type ) ) {

        if ( button.type =='process' ) {
          this.processForm(this.loadedFormData, this.loadedFormData.fields, this.loadedIdentifier, this.loadedAdditionalFormData );
        }

        if ( button.type =='reset' ) {
          this.resetForm();
        }

        if ( button.type =='cancel' ) {
          this.cancelForm();
        }

        this.formLoading = false;
        return 0;
      }

      alert( 'button action error :(' );
      return 0;
    },
  },
};
</script>
