<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">
      <multiselect
        :id="field.name"
        v-model="value"
        :options="field.options"
        :multiple="true"
        :taggable="true" 
        :placeholder="field.name"
        :class="errorClasses"
      />
    </template>
  </default-field>
</template>

<script>
import Multiselect from "vue-multiselect";
import { FormField, HandlesValidationErrors } from "laravel-nova";

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],

  components: {
    Multiselect,  
  },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || "";
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || "");
    },
  },
};
</script>
