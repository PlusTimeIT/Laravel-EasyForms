<template>

  <v-col :cols="cols" :sm="sm" :md="md" :lg="lg">
    <v-row>
        <v-col v-if="loadedFormName == ''">
            <h1>Error Loading Form</h1>
        </v-col>
    </v-row>
    <validation-observer ref="observer">
        <v-row>
             <v-col cols="12">
                <v-alert
                    v-for="(alert, index) in loadedAlerts" :key="index"
                    v-model="alerts[index].display"
                    v-bind="prepareAlertProps(alert)"
                >
                    <div v-html="alert.contents"></div>
                </v-alert>
            </v-col>
        </v-row>
         <v-row v-show="formLoading">
             <v-col>
                <v-progress-circular
                    indeterminate
                    color="primary"
                ></v-progress-circular>
            </v-col>
        </v-row>
         <v-row v-show="!formLoading">
            <v-form v-if="loadedFormData.form_type == 'input'" v-bind="formProps()" ref="loadedForm" :key="updateForm" class="mx-auto w-100">
                    <v-col cols="12">
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
                            <v-col v-for="( button, index ) in loadedFormData.buttons" :key="index">
                                <v-btn
                                    :class="button.class"
                                    :color="button.color"

                                    @click="buttonAction( button )"
                                    :rounded="button.rounded"
                                    :tile="button.tile"
                                >
                                    {{ button.text }}
                                    <v-tooltip top v-if="displayButtonIcon(button)">
                                        <template v-slot:activator="{ on  }">
                                            <v-icon
                                                v-on="on"
                                                v-bind="prepareButtonIconProps(button)"
                                                :key="buttonIconMdi(button)"
                                            >
                                            </v-icon>
                                        </template>
                                        <span>{{ buttonIconText(button) }}</span>
                                    </v-tooltip>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>
            </v-form>
            <v-row v-if="loadedFormData.form_type == 'action'" justify="center">
                <v-col
                    v-for="(action, index) in filteredActions"
                    :key="index"
                    cols="auto"
                    class="py-0 px-2"
                >
                    <v-tooltip top v-if="!isUndefined(action.icon)">
                        <template v-slot:activator="{ on }">
                            <v-icon
                                v-on="on"
                                @click="processForm(action.identifier)"
                                dismissible
                            >
                            {{ action.icon.icon }}
                            </v-icon>
                        </template>
                        <span>{{ action.icon.tooltip }}</span>
                    </v-tooltip>
                    <v-tooltip top v-if="!isUndefined(action.button)">
                        <template v-slot:activator="{ on }">
                            <v-btn
                                :class="action.button.class"
                                :color="action.button.color"
                                @click="buttonAction( action.button , action.identifier )"
                                :rounded="action.button.rounded"
                                :tile="action.button.tile"
                            >
                                {{ action.button.text }}
                                <v-tooltip top v-if="displayButtonIcon(action.button)">
                                    <template v-slot:activator="{ on }">
                                        <v-icon
                                            v-on="on"
                                            v-bind="prepareButtonIconProps(action.button)"
                                        >
                                        {{ buttonIconMdi(action.button) }}
                                        </v-icon>
                                    </template>
                                    <span>{{ buttonIconText(action.button) }}</span>
                                </v-tooltip>
                            </v-btn>
                        </template>
                        <span>{{ action.button.tooltip }}</span>
                    </v-tooltip>
                </v-col>
            </v-row>
        </v-row>
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
      displayBefore: false,
      alerts: [],
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
    filteredActions: function() {
        let _this = this;
        return this.loadedFormData.actions.filter(function(action){
            return _this.checkActionDisplay(action)
        });
    },
    loadedAlerts: function() {
        return this.alerts;
    },
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
      const _this = this;
      const inputs = {};
      const formData = new FormData();
      const multiPart = !this.isUndefined(this.loadedFormData.axios) && !this.isUndefined(this.loadedFormData.axios.multiPart) && this.loadedFormData.axios.multiPart ?
        true :
        false;
      const identifier = !this.isUndefined(this.loadedIdentifier) && this.loadedIdentifier !== null && this.loadedIdentifier !== 0 ?
        true :
        false;

      Object.keys(this.asyncFieldList).forEach((item) => {
        if (multiPart) {
          if (formData.has(_this.asyncFieldList[item].name)) {
            formData.set(
                _this.asyncFieldList[item].name,
              this.isObject(_this.asyncFieldList[item].value) || this.isArray(_this.asyncFieldList[item].value) ?
                JSON.stringify(_this.asyncFieldList[item].value) :
                _this.asyncFieldList[item].value,
            );
          } else {
            formData.append(
                _this.asyncFieldList[item].name,
              this.isObject(_this.asyncFieldList[item].value) || this.isArray(_this.asyncFieldList[item].value) ?
                JSON.stringify(_this.asyncFieldList[item].value) :
                _this.asyncFieldList[item].value,
            );
          }
        } else {
          inputs[_this.asyncFieldList[item].name] = _this.asyncFieldList[item].value;
        }
      });

      if (multiPart) {
        // prep formdata
        formData.append('form_name', this.loadedFormName);
        if (identifier) {
          if (formData.has('id')) {
            formData.set(
                'id',
              this.isObject(this.loadedIdentifier) ||
                this.isArray(this.loadedIdentifier) ?
                JSON.stringify(this.loadedIdentifier) :
                this.loadedIdentifier,
            );
          } else {
            formData.append(
                'id',
              this.isObject(this.loadedIdentifier) ||
                this.isArray(this.loadedIdentifier) ?
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
    formLoaded: function(val) {
      this.$emit('loaded', val);
    },
  },
  async created() {
    if ( this.isObject( this.load_form ) ) {
      const _this = this;
      this.loadedFormName = this.load_form.name;
      this.formLoaded = true;
      this.loadedFormData = this.load_form;
      this.alerts = [...this.alerts, ...this.loadedFormData.alerts];
      this.alerts.forEach( function( alert, index ) {
        alert.display = false;
        alert.old_contents = alert.contents;
        _this.$set(_this.alerts, index, alert);
      });
      this.triggerAlerts('before_load');
      this.fieldList = this.load_form.fields;
      this.originalFormData = {...this.load_form};
      this.formLoading = false;
      this.triggerAlerts('after_load');
    } else {
      this.formLoading = true;
      this.loadedFormName = this.load_form;
      await this.loadFormFields(this.loadedIdentifier);
    }
  },
  methods: {
    checkActionDisplay: function( action ) {
        let _this = this;
        if( ! this.isUndefined(action.conditions) && action.conditions !== null ){
            let results = [];
            action.conditions.forEach( function(condition){
                results.push(eval( '"' + _this.loadedAdditionalFormData[condition.check] + '" ' + condition.operator + ' "' + condition.against + '"' ));
            });
            if( results.includes(false) ){
                return false;
            }
        }
        return true;
    },
    prepareAlertProps: function( alert ) {
      const result = {};
      Object.keys(alert).forEach(function(key) {
        result[key] = alert[key];
        if ( key == 'icon' && alert[key] !== null ) {
          result[key] = alert[key].icon;
        }
      });
      return result;
    },
    displayButtonIcon: function( button ) {
      return !this.isUndefined(button.icon) ? true : false;
    },
    buttonIconText: function( button ) {
      return !this.isUndefined(button.icon.tooltip) ? button.icon.tooltip : 'Submit';
    },
    buttonIconMdi: function( button ) {
      return !this.isUndefined(button.icon.icon) ? button.icon.icon : '';
    },
    triggerAlerts(alertTrigger, text = null) {
      const _this = this;
      this.alerts.forEach( function( alert, index ) {
        if ( alert.trigger == alertTrigger ) {
          alert.display = true;
          alert.contents = alert.old_contents.replace('<response-data>', _this.isObject(text) ? 'There is validation errors' : text);
          if ( alert.auto_close_timer !== 0 ) {
            setTimeout(function() {
              alert.display = false;
              _this.$set(_this.alerts, index, alert);
            }, alert.auto_close_timer);
          }
        }
        _this.$set(_this.alerts, index, alert);
      });
    },
    buttonAction( button , attributes = null ) {
      this.formLoading = true;
      if ( !this.isUndefined( button.type ) ) {
        if ( button.type =='action' ) {
          this.processForm(attributes);
          return 0;
        }
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
    updateField(event) {
      const fieldIndex = this.fieldList.findIndex( (element) => element.name == event.name );
      this.fieldList[fieldIndex] = event;
    },
    resetForm(triggerAlerts = true) {
      // clear data
      this.$refs.observer.reset();
      this.$refs.loadedForm.reset();

      // repopulate
      this.loadedFormData = {...this.originalFormData};
      this.fieldList = [...this.originalFormData.fields];
      this.$emit('resetForm', true);
      this.formLoading = false;

      if ( triggerAlerts ) {
        this.triggerAlerts('reset_form');
      }
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
    prepareButtonIconProps: function(button) {
      const result = {};
      if (this.displayButtonIcon(button)) {
        result.color = !this.isUndefined(button.icon.color) ?
          button.icon.color : 'primary';

        result.class = !this.isUndefined(button.icon.class) ?
          button.icon.class : '';

        if (!this.isUndefined(button.icon.size)) {
          result[button.icon.size] = true;
        }
      }
      console.log( 'ICON RESULT:', result );
      return result;
    },
    getInputCols: function(field) {
      return this.isUndefined(field.cols) ? 12 : field.cols;
    },
    mergeAdditionData: function(formData, additionalData, action) {
      const multiPart = !this.isUndefined(this.loadedFormData.axios) && !this.isUndefined(this.loadedFormData.axios.multi_part) && this.loadedFormData.axios.multiPart ?
        true :
        false;
      const _this = this;
      Object.keys(additionalData).forEach(function(key) {
        if (multiPart) {
          if (formData.has(key)) {
            formData.set(
                key,
              _this.isObject(additionalData[key]) || _this.isArray(additionalData[key]) ?
                JSON.stringify(additionalData[key]) :
                additionalData[key],
            );
          } else {
            formData.append(
                key,
              _this.isObject(additionalData[key]) || _this.isArray(additionalData[key]) ?
                JSON.stringify(additionalData[key]) :
                additionalData[key],
            );
          }
        } else {
          formData[key] = additionalData[key];
        }
      });

      if (multiPart) {
        formData.append('action' , action);
      } else {
          formData['action'] = action;
      }

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
      const _this = this;
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
      ).then((axiosResponse) => {
        _this.formLoading = axiosResponse.loader;
        if (!axiosResponse.result) {
          _this.triggerAlerts('failed_load');
          return false;
        }
        _this.formLoaded = true;
        _this.fieldList = axiosResponse.data.fields;
        _this.loadedFormData = axiosResponse.data;
        _this.originalFormData = JSON.parse(JSON.stringify(axiosResponse.data));
        _this.triggerAlerts('after_load');
      });
    },
    cleanAlerts: function() {
        const _this = this;
        this.alerts.forEach( function( alert, index ) {
        if ( alert.trigger == 'failed_processing' || alert.trigger == 'successful_processing' ) {
          alert.display = false;
          alert.contents = alert.old_contents;
          _this.$set(_this.alerts, index, alert);
        }
      });
    },
    processForm: function(action = []) {
      const _this = this;
      this.formLoading = true;
      _this.cleanAlerts();
      _this.triggerAlerts('before_processing');
      _this.request(
          'post',
          '/axios/forms/process',
          _this.mergeAdditionData(
              _this.formData,
              _this.loadedAdditionalFormData,
              action
          ),
          _this.loadedFormData.axios.headers,
      ).then((axiosResponse) => {
        _this.formLoading = axiosResponse.loader;
        if (_this.loadedFormData.axios.expecting_results) {
          _this.$emit('results', axiosResponse);
        }
        if (!axiosResponse.result) {
          _this.$refs.observer.setErrors(axiosResponse.data);
          _this.triggerAlerts('failed_processing' , axiosResponse.data);
          return Promise.resolve();
        }
        if (!_this.isUndefined(_this.loadedFormData.axios.redirect) && _this.loadedFormData.axios.redirect !== false) {
          _this.redirect(_this.loadedFormData.axios.redirect);
        }
        if (!_this.isUndefined(axiosResponse.redirect) && axiosResponse.redirect !== null) {
            console.log( 'RESPONSE:' + axiosResponse.redirect );
          _this.redirect(axiosResponse.redirect);
        }

        _this.triggerAlerts('successful_processing' , axiosResponse.data );
        if (!_this.isUndefined(_this.loadedFormData.axios.form_reset) && _this.loadedFormData.axios.form_reset !== false) {
          _this.resetForm(false);
        }
        return Promise.resolve();
      });
    },
  },
};
</script>
