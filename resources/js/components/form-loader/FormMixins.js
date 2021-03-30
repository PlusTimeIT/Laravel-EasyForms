import axios from 'axios';

export const FormMixin = {
  methods: {
    isObjectEmpty: function(o) {
      for (const p in o) {
        if (Object.prototype.hasOwnProperty.call(o, p)) {
          return false;
        }
      }
      return true;
    },
    isObject: function(o) {
      return typeof o === 'object';
    },
    isArray: function(o) {
      return Array.isArray(o);
    },
    isFile: function(o) {
      return ('File' in window && o instanceof File) ? true : false;
    },
    isUndefined: function(o) {
      return typeof(o) === 'undefined';
    },
    snakeToCamel: function(s) {
      return s.toLowerCase().replace(/[-_][a-z0-9]/g, (group) => group.slice(-1).toUpperCase());
    },
    request: function(type, url, data = null, parameters = {}) {
      const defaultParameters = {headers: {'Content-Type': 'application/json'}};
      const sendParameters = {headers: {...defaultParameters, ...parameters}};
      return axios[type](url, data, sendParameters)
          .then((response) => {
            return response.data;
          });
    },
    validateResponse: function(response) {
      const errors = {};
      Object.keys(response).forEach((item) => {
        errors[item] = [];
        Object.keys(response[item]).forEach((error) => {
          errors[item].push(response[item][error]);
        });
      });
      return errors;
    },
    redirect: function( location ) {
      if ( location == 'reload' ) {
        window.location.reload();
        return false;
      }
      window.location.href = location;
      return false;
    },
  },
};
