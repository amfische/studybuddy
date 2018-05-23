<template>
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label :for="type">{{ type }}</label>
        <textarea class="form-control" :name="type" :rows="size" v-model="input" :id="type"></textarea>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group" v-html="markdown"></div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['type', 'cardData', 'size'],
    data() {
      return {
        input: this.cardData
      }
    },
    computed: {
      markdown() { return marked(this.input); }
    }
  }
</script>
