<template>
  
  <v-col :cols="cols" class="pa-0">
    <v-col v-if="loaded_form_name == ''" class="pa-0">
        <h1>Error Loading Form</h1> 
    </v-col>
    <validation-observer ref="form" tag="div">
      <form v-bind="form_props()" :ref="loaded_form_name" :key="update_form">
        <v-row class="px-4">
          <v-col cols="12" mx-auto>
            <v-row>
              <form-input
                v-for="(field, index_f) in async_field_list"
                :key="index_f"
                :form_field="field"
                :cols="input_cols(field)"
                :additional_form_data="loaded_additional_form_data"
                @field_update="update_field"
              ></form-input>
            </v-row>
            <v-row v-if="display_button || cancel_button">
              <v-col v-if="display_button">
                <v-btn
                  class="p-4"
                  :color="button_colour"
                  @click="process_form"
                  :rounded="false"
                  tile
                >
                  {{ button_text }}
                </v-btn>
              </v-col>
              <v-col class="text-right" v-if="cancel_button">
                <v-btn class="p-4" @click="cancel_form" :rounded="false" tile>
                  Cancel
                </v-btn>
              </v-col>
            </v-row>
            <v-tooltip top v-if="!display_icon">
              <template v-slot:activator="{ on , attrs }">
                <v-icon
                  v-on="on"
                  v-bind="prepare_props(attrs)"
                  @click.stop="process_form"
                  :key="icon_mdi"
                >
                </v-icon>
              </template>
              <span>{{ icon_text }}</span>
            </v-tooltip>
          </v-col>
        </v-row>
      </form>
    </validation-observer>
  </v-col>
</template>

<script>

import { ValidationObserver } from "vee-validate";
import { FormMixin } from "./FormMixins";
import FormInput from "./FormInput.vue";


export default {
  name: "FormLoader",
  components: {
    ValidationObserver,
    FormInput
  },
  mixins: [ FormMixin ] ,
  props: {
    identifier: {
      type: [Array, String, Object],
      default: function() {
        return null;
      }
    },
    additional_form_data: {
      type: Object,
      default: () => ({})
    },
    additional_load_form_data: {
      type: Object,
      default: () => ({})
    },
    cols: {
      type: Number,
      default: 12
    },
    load_form: {
      type: [ String, Object],
      default: '' ,
    },
    load_area: String,
    populate: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      field_list: {},
      form_loaded: true,
      loaded_area: "",
      loaded_form_name: "",
      loaded_form_data: false,
      update_form: 0
    };
  },
  asyncComputed: {
    async_field_list() {
      let new_field_list = {};
      let self = this;
      Object.keys(this.field_list).forEach(field => {
        let this_field = self.field_list[field];

        if (!self.is_undefined(this_field.hide)) 
        {
          if (!self.is_undefined(this_field.show) && self.is_object(this_field.show)) 
          {
            Object.keys(this_field.show).forEach(value => {
              if (!self.is_undefined(self.field_list[value].value) && self.field_list[value].value === this_field.show[value]) 
              {
                new_field_list[field] = this_field;
              }
            });
          }
        } 
        else 
        {
          new_field_list[field] = this_field;
        }
      });

      return new_field_list;
    }
  },
  computed: {
    loaded_additional_form_data: function() {
      return this.additional_form_data;
    },
    loaded_additional_load_form_data: function() {
      return this.additional_load_form_data;
    },
    loaded_identifier: function() {
      return this.identifier;
    },
    form_data: function() {
      var self = this;
      var inputs = {};
      var form_data = new FormData();
      let multi_part = !this.is_undefined(this.loaded_form_data.action.axios) && !this.is_undefined(this.loaded_form_data.action.axios.multi_part) && this.loaded_form_data.action.axios.multi_part
        ? true
        : false;
      let identifier = !this.is_undefined(this.loaded_identifier) && this.loaded_identifier !== null && this.loaded_identifier !== 0
        ? true
        : false;

      Object.keys(this.async_field_list).forEach(item => {
        if (multi_part) 
        {
          if (form_data.has(self.async_field_list[item].name)) 
          {
            form_data.set(
              self.async_field_list[item].name,
              this.is_object(self.async_field_list[item].value) || this.is_array(self.async_field_list[item].value)
                ? JSON.stringify(self.async_field_list[item].value)
                : self.async_field_list[item].value
            );
          } 
          else 
          {
            form_data.append(
              self.async_field_list[item].name,
              this.is_object(self.async_field_list[item].value) || this.is_array(self.async_field_list[item].value)
                ? JSON.stringify(self.async_field_list[item].value)
                : self.async_field_list[item].value
            );
          }
        } 
        else 
        {
          inputs[self.async_field_list[item].name] = self.async_field_list[item].value;
        }
      });

      if (multi_part) {
        //prep formdata
        form_data.append("form_name", this.loaded_form_name);
        if (identifier) 
        {
          if (form_data.has("id")) 
          {
            form_data.set(
              "id",
              this.is_object(this.loaded_identifier) ||
                this.is_array(this.loaded_identifier)
                ? JSON.stringify(this.loaded_identifier)
                : this.loaded_identifier
            );
          } 
          else 
          {
            form_data.append(
              "id",
              this.is_object(this.loaded_identifier) ||
                this.is_array(this.loaded_identifier)
                ? JSON.stringify(this.loaded_identifier)
                : this.loaded_identifier
            );
          }
        }
        return form_data;
      } 
      else 
      {
        inputs["form_name"] = this.loaded_form_data.name;
        if (identifier) 
        {
          inputs["id"] = this.loaded_identifier;
        }
        return inputs;
      }
    },
    display_icon: function() {
      if (!this.form_loaded || !this.loaded_form_data) return false;
      return this.is_undefined(this.loaded_form_data.action.buttons[0].icon)
        ? false
        : true;
    },
    icon_text: function() {
      if (!this.form_loaded || !this.loaded_form_data) return "";
      return this.is_undefined(this.loaded_form_data.action.buttons[0].icon)
        ? "Submit"
        : this.loaded_form_data.action.buttons[0].icon.tooltip;
    },
    icon_mdi: function() {
      if (!this.form_loaded || !this.loaded_form_data) return "";
      return this.is_undefined(this.loaded_form_data.action.buttons[0].icon.icon)
        ? ""
        : this.loaded_form_data.action.buttons[0].icon.mdi;
    },
    display_button: function() {
      if (!this.form_loaded || !this.loaded_form_data) return false;
      return this.is_undefined(this.loaded_form_data.action.buttons)
        ? false
        : true;
    },
    cancel_button: function() {
      if (!this.form_loaded || !this.loaded_form_data) return false;
      if (this.is_undefined(this.loaded_form_data.action.buttons))
        return false;
      if (this.is_undefined(this.loaded_form_data.action.buttons[1]))
        return false;
      return this.loaded_form_data.action.buttons[1].cancel;
    },
    button_text: function() {
      if (!this.form_loaded || !this.loaded_form_data) return "Loading...";
      return this.is_undefined(this.loaded_form_data.action.buttons[0].text)
        ? "Submit"
        : this.loaded_form_data.action.buttons[0].text;
    },
    button_colour: function() {
      if (!this.form_loaded || !this.loaded_form_data) return "primary";
      return this.is_undefined(this.loaded_form_data.action.buttons[0].colour)
        ? "primary"
        : this.loaded_form_data.action.buttons[0].colour;
    }
  },
  watch: {
    field_list: {
      handler: function() {
        this.$asyncComputed.async_field_list.update();
      },
      deep: true
    },
    loaded_form_name: function() {},
    form_loaded: function(val) {
      this.$emit("loaded", val);
    },
    loaded_additional_form_data: function() {}
  },
  async mounted() {
    if( this.is_object( this.load_form ) )
    {
      this.loaded_form_name = this.load_form.name;
      this.form_loaded = true;
      this.field_list = this.load_form.fields;
      this.loaded_form_data = this.load_form;
    }
    else
    {
      this.loaded_form_name = this.load_form;
      await this.load_form_fields(this.loaded_identifier);
    }
    
  },
  methods: {
    loaded_computed_field_list() {
      if (this.field_list.length !== 0) 
      {
        let new_field_list = {};
        let self = this;
        Object.keys(this.field_list).forEach(field => {
          let this_field = self.field_list[field];
          if (!self.is_undefined(this_field.hide)) 
          {
            if (!self.is_undefined(this_field.show) && self.is_array(this_field.show)) 
            {
              this_field.show.forEach((value, x) => {
                if (!self.is_undefined(self.field_list[x].value) && self.field_list[x].value === value) 
                {
                  new_field_list[field] = this_field;
                }
              });
            }
          } 
          else 
          {
            new_field_list[field] = this_field;
          }
        });
        return new_field_list;
      }
      return {};
    },
    update_field(event) {
      let fieldIndex = this.field_list.findIndex( element => element.name == event.name );
      this.field_list[fieldIndex] = event;
    },
    cancel_form() {
      this.$emit("cancelled", true);
    },
    form_props: function() {
      let result = {};
      if (!this.loaded_form_data) return result;
      if (!this.is_undefined(this.loaded_form_data.action.axios) && !this.is_undefined(this.loaded_form_data.action.axios.multi_part) && this.loaded_form_data.action.axios.multi_part) 
      {
        result["enctype"] = "application/x-www-form-urlencoded";
      }
      return result;
    },
    prepare_props: function() {
      let result = {};

      if (this.display_icon) 
      {
        result.color = !this.is_undefined(this.loaded_form_data.action.buttons[0].colour)
          ? this.loaded_form_data.action.buttons[0].colour
          : "primary";
        result.class = !this.is_undefined(this.loaded_form_data.action.buttons[0].icon.class)
          ? this.loaded_form_data.action.buttons[0].icon.class
          : "";
        if (this.is_undefined(this.loaded_form_data.action.buttons[0].icon.size)) 
        {
          result[this.loaded_form_data.action.buttons[0].icon.size] = true;
        }
      }
      return result;
    },
    input_cols: function(field) {
      return this.is_undefined(field.cols) ? 12 : field.cols;
    },
    merge_addition_data: function(form_data, additional_data) {
      let multi_part = !this.is_undefined(this.loaded_form_data.action.axios) && !this.is_undefined(this.loaded_form_data.action.axios.multi_part) && this.loaded_form_data.action.axios.multi_part
        ? true
        : false;
      Object.keys(additional_data).forEach(function(key) {
        if (multi_part) 
        {
          if (form_data.has(key)) 
          {
            form_data.set(
              key,
              this.is_object(additional_data[key]) || this.is_array(additional_data[key])
                ? JSON.stringify(additional_data[key])
                : additional_data[key]
            );
          } 
          else 
          {
            form_data.append(
              key,
              this.is_object(additional_data[key]) || this.is_array(additional_data[key])
                ? JSON.stringify(additional_data[key])
                : additional_data[key]
            );
          }
        } 
        else 
        {
          form_data[key] = additional_data[key];
        }
      });
      return form_data;
    },
    merge_additional_load_form_data: function(form_data, additional_data) {
      Object.keys(additional_data).forEach(function(key) {
        form_data[key] = additional_data[key];
      });
      return form_data;
    },
    async load_form_fields(id) {
      var self = this;
      self.form_loaded = false;

      return this.request(
        "post",
        "/axios/forms/load",
        this.merge_additional_load_form_data(
          {
            form_name: this.loaded_form_name,
            populate: this.populate,
            id: id
          },
          this.loaded_additional_load_form_data
        ),
        true,
        false
      ).then(axios_response => {
        self.form_loaded = ! axios_response.loader;
        self.field_list = axios_response.response.data.fields;
        self.loaded_form_data = axios_response.response.data;
      });
    },
    process_form: function() {
      var self = this;
      self.form_loaded = false;
      this.request(
        "post",
        "/axios/forms/process",
        this.merge_addition_data(
          this.form_data,
          this.loaded_additional_form_data
        ),
        this.loaded_form_data.action.axios.expecting_results,
        this.loaded_form_data.action.axios.display_notification,
        this.loaded_form_data.action.axios.headers
      ).then(response => {
        self.form_loaded = true;
        if (!response.success) 
        {
          self.$refs.form.setErrors(self.validate_response(response.data));
          return false;
        }

        self.$refs.form.reset();

        if (self.loaded_form_data.action.axios.expecting_results) 
        {
          self[self.loaded_form_data.action.axios.result_variable] =
            response.data;
          self.$emit("results", response.data);
        }

        if ( !self.is_undefined(response.redirect_override) && response.redirect_override !== false ) 
        {
          self.redirect(response.redirect_override);
        } 
        else if (self.loaded_form_data.action.axios.redirect !== false) 
        {
          self.redirect(self.loaded_form_data.action.axios.redirect);
        }
      });
    }
  }
};
</script>