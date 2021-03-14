<template>

  <v-col :cols="cols" class="pa-0">
    <v-col v-if="loadedFormName == ''" class="pa-0">
        <h1>Error Loading Form</h1>
    </v-col>
    <v-col v-if="loadedFormName == ''" class="pa-0">
        <h1>Error Loading Form</h1>
    </v-col>
    <validation-observer ref="form" tag="div">
        <v-progress-circular
            v-if="formLoading"
            indeterminate
            color="primary"
        ></v-progress-circular>
      <v-form v-if="!formLoading" v-bind="formProps()" ref="loaded_form" :key="updateForm">
        <v-row class="px-4">
          <v-col cols="12" mx-auto>
            <v-row>
              <form-input
                v-for="(field, index_f) in asyncFieldList"
                :key="index_f"
                v-model="fieldList[index_f]"
                :cols="getInputCols(field)"
                :additional_form_data="loadedAdditionalFormData"
                @field_update="updateField"
              ></form-input>
            </v-row>
            <v-row v-if="displayButton">
              <v-col v-for="( button, index ) in loadedFormData.action.buttons" :key="index">
                <v-btn
                  class="p-4"
                  :color="button.colour"
                  @click="buttonAction( button )"
                  :rounded="false"
                  tile
                >
                  {{ button.text }}
                </v-btn>
              </v-col>
            </v-row>
            <v-tooltip top v-if="!displayIcon">
              <template v-slot:activator="{ on , attrs }">
                <v-icon
                  v-on="on"
                  v-bind="prepareProps(attrs)"
                  @click.stop="processForm"
                  :key="iconMdi"
                >
                </v-icon>
              </template>
              <span>{{ iconText }}</span>
            </v-tooltip>
          </v-col>
        </v-row>
      </v-form>
    </validation-observer>
  </v-col>
</template>

<script>

import {ValidationObserver} from 'vee-validate';
import {FormMixin} from './FormMixins';
import FormInput from './FormInput.vue';


export default {
  name: 'FormLoader',
  components: {
    ValidationObserver,
    FormInput,
  },
  mixins: [FormMixin],
  props: {
    identifier: {
      type: [Array, String, Object],
      default: function() {
        return null;
      },
    },
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
    load_form: {
      type: [String, Object],
      default: '',
    },
    populate: {
      type: Boolean,
      default: false,
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
      const self = this;
      Object.keys(this.fieldList).forEach((field) => {
        const thisField = self.fieldList[field];

        if (!self.is_undefined(thisField.hide)) {
          if (!self.is_undefined(thisField.show) && self.is_object(thisField.show)) {
            Object.keys(thisField.show).forEach((value) => {
              if (!self.is_undefined(self.fieldList[value].value) && self.fieldList[value].value === thisField.show[value]) {
                newFieldList[field] = thisField;
              }
            });
          }
        } else {
          newFieldList[field] = thisField;
        }
      });

      return newFieldList;
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
    formData: function() {
      const self = this;
      const inputs = {};
      const formData = new FormData();
      const multiPart = !this.is_undefined(this.loadedFormData.action.axios) && !this.is_undefined(this.loadedFormData.action.axios.multiPart) && this.loadedFormData.action.axios.multiPart ?
        true :
        false;
      const identifier = !this.is_undefined(this.loadedIdentifier) && this.loadedIdentifier !== null && this.loadedIdentifier !== 0 ?
        true :
        false;

      Object.keys(this.asyncFieldList).forEach((item) => {
        if (multiPart) {
          if (formData.has(self.asyncFieldList[item].name)) {
            formData.set(
                self.asyncFieldList[item].name,
              this.is_object(self.asyncFieldList[item].value) || this.is_array(self.asyncFieldList[item].value) ?
                JSON.stringify(self.asyncFieldList[item].value) :
                self.asyncFieldList[item].value,
            );
          } else {
            formData.append(
                self.asyncFieldList[item].name,
              this.is_object(self.asyncFieldList[item].value) || this.is_array(self.asyncFieldList[item].value) ?
                JSON.stringify(self.asyncFieldList[item].value) :
                self.asyncFieldList[item].value,
            );
          }
        } else {
          inputs[self.asyncFieldList[item].name] = self.asyncFieldList[item].value;
        }
      });

      if (multiPart) {
        // prep formdata
        formData.append('form_name', this.loadedFormName);
        if (identifier) {
          if (formData.has('id')) {
            formData.set(
                'id',
              this.is_object(this.loadedIdentifier) ||
                this.is_array(this.loadedIdentifier) ?
                JSON.stringify(this.loadedIdentifier) :
                this.loadedIdentifier,
            );
          } else {
            formData.append(
                'id',
              this.is_object(this.loadedIdentifier) ||
                this.is_array(this.loadedIdentifier) ?
                JSON.stringify(this.loadedIdentifier) :
                this.loadedIdentifier,
            );
          }
        }
        return formData;
      } else {
        inputs['form_name'] = this.loadedFormData.name;
        if (identifier) {
          inputs['id'] = this.loadedIdentifier;
        }
        return inputs;
      }
    },
    displayIcon: function() {
      if (!this.formLoaded || !this.loadedFormData) return false;
      return this.is_undefined(this.loadedFormData.action.buttons[0].icon) ?
        false :
        true;
    },
    iconText: function() {
      if (!this.formLoaded || !this.loadedFormData) return '';
      return this.is_undefined(this.loadedFormData.action.buttons[0].icon) ?
        'Submit' :
        this.loadedFormData.action.buttons[0].icon.tooltip;
    },
    iconMdi: function() {
      if (!this.formLoaded || !this.loadedFormData) return '';
      return this.is_undefined(this.loadedFormData.action.buttons[0].icon.icon) ?
        '' :
        this.loadedFormData.action.buttons[0].icon.mdi;
    },
    displayButton: function() {
      if (!this.formLoaded || !this.loadedFormData) return false;
      return this.is_undefined(this.loadedFormData.action.buttons) || !this.is_array(this.loadedFormData.action.buttons) || this.loadedFormData.action.buttons.length === 0 ?
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
    formLoaded: function(val) {
      this.$emit('loaded', val);
    },
  },
  async mounted() {
    if ( this.is_object( this.load_form ) ) {
      this.loadedFormName = this.load_form.name;
      this.formLoaded = true;
      this.fieldList = this.load_form.fields;
      this.loadedFormData = this.load_form;
      this.originalFormData = JSON.parse(JSON.stringify(this.load_form));
      this.formLoading = false;
    } else {
      this.formLoading = true;
      this.loadedFormName = this.load_form;
      await this.loadFormFields(this.loadedIdentifier);
    }
  },
  methods: {
    buttonAction( button ) {
      this.formLoading = true;
      if ( !this.is_undefined( button.type ) ) {
        if ( button.type =='process' ) {
          this.processForm();
          return 0;
        }
        if ( button.type =='reset' ) {
          this.resetForm();
          return 0;
        }
        if ( button.type =='cancel' ) {
          this.cancelForm();
          return 0;
        }
      }
      alert( 'button action error :(' );
      return 0;
    },
    loadedComputedFieldList() {
      if (this.fieldList.length !== 0) {
        const newFieldList = {};
        const self = this;
        Object.keys(this.fieldList).forEach((field) => {
          const thisField = self.fieldList[field];
          if (!self.is_undefined(thisField.hide)) {
            if (!self.is_undefined(thisField.show) && self.is_array(thisField.show)) {
              thisField.show.forEach((value, x) => {
                if (!self.is_undefined(self.fieldList[x].value) && self.fieldList[x].value === value) {
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
      return {};
    },
    updateField(event) {
      const fieldIndex = this.fieldList.findIndex( (element) => element.name == event.name );
      this.fieldList[fieldIndex] = event;
    },
    resetForm() {
      this.loadedFormData = JSON.parse(JSON.stringify(this.originalFormData));
      this.fieldList = JSON.parse(JSON.stringify(this.originalFormData.fields));
      this.$refs.form.reset();
      this.$refs.loaded_form.reset();
      this.$emit('resetForm', true);
      this.formLoading = false;
      // await this.loadFormFields(this.loadedIdentifier);
    },
    cancelForm() {
      this.$emit('cancelled', true);
      this.formLoading = false;
    },
    formProps: function() {
      const result = {};
      if (!this.loadedFormData) return result;
      if (!this.is_undefined(this.loadedFormData.action.axios) && !this.is_undefined(this.loadedFormData.action.axios.multiPart) && this.loadedFormData.action.axios.multiPart) {
        result['enctype'] = 'application/x-www-form-urlencoded';
      }
      return result;
    },
    prepareProps: function() {
      const result = {};

      if (this.displayIcon) {
        result.color = !this.is_undefined(this.loadedFormData.action.buttons[0].colour) ?
          this.loadedFormData.action.buttons[0].colour :
          'primary';
        result.class = !this.is_undefined(this.loadedFormData.action.buttons[0].icon.class) ?
          this.loadedFormData.action.buttons[0].icon.class :
          '';
        if (this.is_undefined(this.loadedFormData.action.buttons[0].icon.size)) {
          result[this.loadedFormData.action.buttons[0].icon.size] = true;
        }
      }
      return result;
    },
    getInputCols: function(field) {
      return this.is_undefined(field.cols) ? 12 : field.cols;
    },
    mergeAdditionData: function(formData, additionalData) {
      const multiPart = !this.is_undefined(this.loadedFormData.action.axios) && !this.is_undefined(this.loadedFormData.action.axios.multi_part) && this.loadedFormData.action.axios.multiPart ?
        true :
        false;
      const self = this;
      Object.keys(additionalData).forEach(function(key) {
        if (multiPart) {
          if (formData.has(key)) {
            formData.set(
                key,
              self.is_object(additionalData[key]) || self.is_array(additionalData[key]) ?
                JSON.stringify(additionalData[key]) :
                additionalData[key],
            );
          } else {
            formData.append(
                key,
              self.is_object(additionalData[key]) || self.is_array(additionalData[key]) ?
                JSON.stringify(additionalData[key]) :
                additionalData[key],
            );
          }
        } else {
          formData[key] = additionalData[key];
        }
      });
      return formData;
    },
    mergeAdditionalLoadFormData: function(formData, additionalData) {
      Object.keys(additionalData).forEach(function(key) {
        formData[key] = additionalData[key];
      });
      return formData;
    },
    async loadFormFields(id) {
      this.formLoaded = false;
      const self = this;
      return this.request(
          'post',
          '/axios/forms/load',
          this.mergeAdditionalLoadFormData(
              {
                form_name: this.loadedFormName,
                populate: this.populate,
                id: id,
              },
              this.loadedAdditionalLoadFormData,
          ),
          true,
          false,
      ).then((axiosResponse) => {
        self.formLoaded = ! axiosResponse.loader;
        self.formLoading = axiosResponse.loader;
        self.fieldList = axiosResponse.response.data.fields;
        self.loadedFormData = axiosResponse.response.data;
        self.originalFormData = JSON.parse(JSON.stringify(axiosResponse.response.data));
      });
    },
    processForm: function() {
      const self = this;
      self.formLoaded = false;
      this.request(
          'post',
          '/axios/forms/process',
          this.mergeAdditionData(
              this.formData,
              this.loadedAdditionalFormData,
          ),
          this.loadedFormData.action.axios.expecting_results,
          this.loadedFormData.action.axios.display_notification,
          this.loadedFormData.action.axios.headers,
      ).then((response) => {
        self.formLoaded = true;
        if (!response.success) {
          self.$refs.form.setErrors(self.validate_response(response.data));
          return false;
        }

        self.$refs.form.reset();
        self.$refs[this.loadedFormName].reset();

        if (self.loadedFormData.action.axios.expecting_results) {
          self[self.loadedFormData.action.axios.result_variable] =
            response.data;
          self.$emit('results', response.data);
        }

        if ( !self.is_undefined(response.redirect_override) && response.redirect_override !== false ) {
          self.redirect(response.redirect_override);
        } else if (self.loadedFormData.action.axios.redirect !== false) {
          self.redirect(self.loadedFormData.action.axios.redirect);
        }
      });
    },
  },
};
</script>
