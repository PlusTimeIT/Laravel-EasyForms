<template>
    <v-menu
        ref="menu"
        v-model="menu"
        :close-on-content-click="false"
        transition="scale-transition"
        offset-y
        max-width="290px"
        min-width="290px"
    >
        <template v-slot:activator="{ on }">
            <v-text-field
                v-model="time_input"
                persistent-hint
                readonly
                v-on="on"
                outlined
                :error-messages="loadedErrorMessages"
                dense
                 :label="label"
            ></v-text-field>
        </template>
        <v-time-picker scrollable range dark
            v-model="time_input"
            :ampm-in-title="ampm_in_title"
        ></v-time-picker>
    </v-menu>
</template>

<script>
export default {
  props: {
    value: {
      default: '',
    },
    errorMessages: {
      type: Array,
      default: () => [],
    },
    label: {
      type: String,
      default: '',
    },
    ampm_in_title: {
      type: Boolean,
      default: false,
    },
    no_title: {
      type: Boolean,
      default: false,
    },
    populate: {
      type: String,
      default: '',
    },
  },
  data: function() {
    return {
      menu1: false,
      menu: false,
      time_input: '',
    };
  },
  mounted() {
    this.time_input = this.populate;
  },
  computed: {
    loadedErrorMessages(){
      return this.errorMessages;
    },
    computedTimesFormatted: function() {
      return this.time_input;
    },
  },
  watch: {
    time_input: function( val ) {
      this.$emit('input', val);
    },
  },

  methods: {

  },
};
</script>
