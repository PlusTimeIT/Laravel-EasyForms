<template>
  <v-col :cols="cols" :offset="offset" class="pt-0 pb-0" v-bind="display_col()">
    <validation-provider
      v-slot="{ errors }"
      :name="field_data.name"
      tag="div"
    >
    
      <component
        :is="field_data.component"
        v-model="field_data.value"
        v-bind="prepare_props(errors)"
      >
        <p class="mb-3 mt-4" v-if="field_data.component == 'h2'">
          {{ field_data.value }}
        </p>
        
        <v-tooltip v-if="field_data.help !== ''" slot="append" bottom>
          <template #activator="{ on , attrs }">
            <v-icon slot="activator" color="primary" v-on="on" v-bind="attrs" icon="mdi-help-box" />
          </template>
          
          <span>{{ field_data.help }} </span>
        </v-tooltip>
      </component>
    </validation-provider>
  </v-col>
</template>

<script>
import { ValidationProvider } from "vee-validate";
import { FormMixin } from "./FormMixins";

export default {
  $validates: true,
  mixins: [ FormMixin ] ,
  components: {
    ValidationProvider
  },
  props: {
    form_field: {
      type: Object,
      default: () => ({})
    },
    cols: {
      Type: String,
      default: "6"
    },
    additional_form_data: {
      type: Object,
      default: () => ({})
    },
    offset: {
      Type: String,
      default: ""
    }
  },
  watch: {
    field_data: {
      handler: function(val) {
        this.$emit("update", val.value);
        this.$emit("field_update", val);
      },
      deep: true
    }
  },
  data: () => ({
    password: false,
    confirm_password: false,
    menu: false,
    dates: [],
    field_data: {}
  }),
  created() {
    this.field_data = this.form_field;
  },
  computed: {
    additional_form: function() {
      return this.additional_form_data;
    }
  },
  methods: {
    display_col() {
      let result = {};
      if (
        !this.is_undefined(this.field_data.type) &&
        this.field_data.type == "hidden"
      ) {
        result["class"] = "hidden-input";
      }  
      return result;
    },
    prepare_props(errors) {
      let result = {};
      result["error-messages"] = errors;
      result["label"] = this.prepare_label();
      result["outlined"] = true;
      result["dense"] = true;

      if (
        !this.is_undefined(this.field_data.help) &&
        this.field_data.help !== ""
      ) {
        //result['prepend-inner-icon'] = this.field_data.value;
      }

      if (
        !this.is_undefined(this.field_data.type) &&
        this.field_data.type == "time"
      ) {
        result["populate"] = this.field_data.value;
        result["ampm_in_title"] = true;
        result["no_title"] = false;
        result["class"] = "mt-2";
      }

      if (
        !this.is_undefined(this.field_data.type) &&
        this.field_data.type == "file-input"
      ) {
        result["show-size"] = true;
        result["accept"] = this.field_data.accept;
      }

      console.log( 'Data Type:' + this.field_data.type );
      if (
        !this.is_undefined(this.field_data.type) &&
        (this.field_data.type == "select" ||
          this.field_data.type == "customer-select" ||
          this.field_data.type == "facility-select" ||
          this.field_data.type == "zone-select" ||
          this.field_data.type == "service-select")
      ) {
        result["selected"] =
          !this.is_undefined(this.field_data.integer) &&
          this.field_data.integer
            ? parseInt(this.field_data.value)
            : this.field_data.value;
        result["any_field"] = !this.is_undefined(
          this.field_data.any_field
        )
          ? this.field_data.any_field
          : false;
        result["items"] = this.field_data.items;
        result["item-text"] = this.field_data.item_text;
        result["item-value"] = this.field_data.item_value;
        result["data-vv-name"] = "select";
        result["chips"] = true;
      }
      if (
        !this.is_undefined(this.field_data.type) &&
        this.field_data.type == "hidden"
      ) {
        result["class"] = "hidden-input";
      }

      if (
        !this.is_undefined(this.field_data.component_type) &&
        this.field_data.component_type == "password"
      ) {
        result["type"] = this.field_data.component_type;
      }

      if (
        !this.is_undefined(this.field_data.component) &&
        this.field_data.component == "date-picker"
      ) {
        result["close-on-content-click"] = false;
        result["controls"] = false;
        if (!this.is_undefined(this.field_data.close_on_content_click))
          result[
            "close-on-content-click"
          ] = this.field_data.close_on_content_click;

        if (!this.is_undefined(this.field_data.controls))
          result["controls"] = this.field_data.controls;
      }

      if (!this.is_undefined(this.field_data.step)) {
        result["step"] = this.field_data.step;
      }

      if (!this.is_undefined(this.field_data.component_type)) {
        result["type"] = this.field_data.component_type;
      }

      if (!this.is_undefined(this.field_data.min)) {
        result["min"] = this.field_data.min;
      }

      if (!this.is_undefined(this.field_data.max)) {
        result["max"] = this.field_data.max;
      }

      if (!this.is_undefined(this.field_data.placeholder)) {
        result["placeholder"] = this.field_data.placeholder;
      }

      if (!this.is_undefined(this.field_data.readonly)) {
        result["readonly"] = this.field_data.readonly;
      }

      if (!this.is_undefined(this.field_data.multiple)) {
        result["multiple"] = this.field_data.multiple;
      }

      if (!this.is_undefined(this.additional_form_data)) {
        result["additional_form_data"] = this.additional_form;
      }

      if (this.field_data.component == "h2") {
        result = { "v-html": this.field_data.value };
      }

      return result;
    },
    prepare_label() {
      let label = !this.is_undefined(this.field_data.label)
        ? this.field_data.label
        : this.field_data.name;
      if (
        !this.is_undefined(this.field_data.required) &&
        this.field_data.required
      ) {
        label += " ( * required )";
      } else {
        label += " ( optional )";
      }
      if (
        !this.is_undefined(this.field_data.readonly) &&
        this.field_data.readonly
      ) {
        label = this.field_data.label + " ( readonly )";
      }
      return label;
    }
  }
};
</script>

<style>
.v-select__selections {
  margin-top: 3px !important;
  margin-bottom: 2px !important;
}
.v-select.v-input--dense .v-chip {
  margin-bottom: 2px !important;
}
.hidden-input{
  display: none;
}
</style>
