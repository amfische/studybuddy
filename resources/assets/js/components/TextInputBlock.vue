<template>
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label for="question">Question</label>
        <input class="form-control" name="question" type="text" v-model="input" id="question">
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Formatted Question</label>
        <input class="form-control" type="text" v-model="markdown" disabled>
      </div>
    </div>
  </div>  
</template>

<script>
  export default {
    props: ['question'],
    data() {
      return {
        input: this.question
      }
    },
    computed: {
      markdown() { return marked(this.input); }
    }
  }
</script>
