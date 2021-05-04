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
         <v-row v-if="!formLoading">
            <input-form
                v-if="loadedFormData.form_type == 'input'"
                :form="loadedFormData"
                @results="formHasResults"
                @errors="formHasErrors"
                @loading="formIsLoading"
                @reset="formIsReset"
                @cancelled="formIsCancelled"
                @processing="formIsProcessing"
                @failed="formHasFailedProcessing"
                @successful="formHasSuccessfulProcessing"

            ></input-form>
            <action-form
                v-if="loadedFormData.form_type == 'action'"
                :form="loadedFormData"
                @loading="formIsLoading"
                @cancelled="formIsCancelled"
                @processing="formIsProcessing"
                @failed="formHasFailedProcessing"
                @successful="formHasSuccessfulProcessing"
            ></action-form>
        </v-row>
    </validation-observer>
  </v-col>
</template>

<script>

// This man form emits the current events
// @loaded - boolean - whether the form has been successfully loaded.

import {ValidationObserver} from 'vee-validate';
import {FormMixin} from './mixins/FormMixins';
import InputForm from './forms/InputForm.vue';
import ActionForm from './forms/ActionForm.vue';


export default {
  name: 'FormLoader',
  components: {
    ValidationObserver,
    ActionForm,
    InputForm
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
      alerts: [],
      formLoading: true,
      formLoaded: true,
      results: false,
      loadedFormName: '',
      loadedFormData: false,
      originalFormData: false
    };
  },
  computed: {
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
    displayButton: function() {
      if (!this.formLoaded || !this.loadedFormData) return false;
      return this.isUndefined(this.loadedFormData.buttons) || !this.isArray(this.loadedFormData.buttons) || this.loadedFormData.buttons.length === 0 ?
        false :
        true;
    },
  },
  watch: {
    formLoaded: function(val) {
      this.$emit('loaded', val);
      if( val ){
          this.formLoading = false;
      }
    },
  },
  async created() {
    if ( this.isObject( this.load_form ) ) {
      // load form by page load (passed directly to the component)
      const _this = this;
      this.loadedFormName = this.load_form.name;
      this.formLoaded = true;
      this.loadedFormData = this.load_form;
      this.alerts = [...this.loadedFormData.alerts];
      this.alerts.forEach( function( alert, index ) {
        alert.display = false;
        alert.old_contents = alert.contents;
        _this.$set(_this.alerts, index, alert);
      });
      this.triggerAlerts('before_load');
      this.originalFormData = {...this.load_form};
      this.formLoading = false;
      this.triggerAlerts('after_load');

    } else {
    // load by axios call from form name
      this.formLoading = true;
      this.loadedFormName = this.load_form;
      await this.getFormDetails(this.loadedIdentifier);
    }
  },
  methods: {
    formHasResults: function(event){
        this.results = event;
    },
    formHasErrors: function(event){
        this.$refs.observer.setErrors(event);
    },
    formIsLoading: function(event){
        this.formLoading = event;
    },
    formIsReset: function(event){
        this.triggerAlerts('reset_form');
        this.$refs.observer.reset();
    },
    formIsCancelled: function(event){
        this.triggerAlerts('cancelled');
    },
    formIsProcessing: function(event){
        this.triggerAlerts('before_processing');
    },
    formHasFailedProcessing: function(event){
        this.triggerAlerts('failed_processing',event );
    },
    formHasSuccessfulProcessing: function(event){
        this.triggerAlerts('successful_processing' , event);
    },
    async getFormDetails(id) {
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
          console.log( axiosResponse );
        _this.formLoading = axiosResponse.loader;
        if (!axiosResponse.result) {
          _this.triggerAlerts('failed_load');
          return false;
        }
        _this.formLoaded = true;
        _this.loadedFormData = axiosResponse.data;
        _this.originalFormData = JSON.parse(JSON.stringify(axiosResponse.data));
        _this.triggerAlerts('after_load');
      });
    },
  },
};
</script>
