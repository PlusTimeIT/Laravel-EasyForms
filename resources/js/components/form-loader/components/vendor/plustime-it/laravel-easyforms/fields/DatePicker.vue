<template>
    <v-menu
        ref="menu"
        v-model="menu"
        :close-on-content-click="closeOnContentClick"
        transition="scale-transition"
        offset-y
        max-width="290px"
        min-width="290px"
    >
        <template v-slot:activator="{ on }">
            <v-text-field
                v-model="formattedDates"
                persistent-hint
                readonly
                v-on="on"
                :error-messages="loadedErrorMessages"
                outlined
                dense
                 :label="label"
            ></v-text-field>
        </template>
        <v-date-picker v-model="dates" :range="multiple" no-title scrollable dark>
            <v-spacer v-if="controls"></v-spacer>
            <v-btn v-if="controls" text color="primary" @click="menu = false">Cancel</v-btn>
            <v-btn v-if="controls" text color="primary" @click="$refs.menu.save(dates)">OK</v-btn>
        </v-date-picker>
    </v-menu>
</template>

<script>

import moment from 'moment-timezone';
import {FormMixin} from '../mixins/FormMixins';

export default {
  mixins: [FormMixin],
  props: {
    value: {
      default: () => [],
    },
    label: {
      type: String,
      default: '',
    },
    errorMessages: {
      type: Array,
      default: () => [],
    },
    multiple: {
      type: Boolean,
      default: false,
    },
    closeOnContentClick: {
      type: Boolean,
      default: false,
    },
    controls: {
      type: Boolean,
      default: true,
    },
  },
  data: () => ({
    dates: '',
    datesFormatted: '',
    menu: false,
  }),
  mounted() {
    if ( ! this.multiple ) {
      this.datesFormatted = this.formatPickerDate( this.dates );
      this.dates = this.value;
    } else {
      this.datesFormatted = [];
      this.dates = this.value;
    }
  },
  computed: {
    loadedErrorMessages(){
        return this.errorMessages;
    },
    formattedDates() {
      if ( ! this.isArray( this.dates ) ) {
        return this.formatPickerDate( this.dates );
      }

      return this.formatPickerDate( this.dates ).join(' ~ ');
    },
  },
  watch: {
    dates( val ) {
      this.datesFormatted = this.formatPickerDate( this.dates );
      this.$emit( 'input', this.datesFormatted );
    },
  },

  methods: {
    formatPickerDate( date, locale = 'en-au' ) {
      if ( ! this.isArray( date ) ) {
        const today = moment( date );
        today.locale( locale );
        return today.format( 'L' );
      }
      const addedDates = [];
      if ( date.length == 0 ) {
        return [];
      }

      date.forEach( (dates) => {
        const newDate = moment( dates );
        newDate.locale( locale );
        addedDates.push( newDate.format( 'L' ) );
      });

      return addedDates;
    },
  },
};
</script>
