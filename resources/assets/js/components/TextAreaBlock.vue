<template>
  <div class="row text-area-block">
    <div class="col-sm-12">
      <h1 class="text-center heading">{{ label }}</h1>
    </div>
    <div class="col-sm-12 col-md-5">
      <div class="markdown-container">
        <textarea class="form-control" ref="textarea" :name="type" :rows="size" v-model="input"></textarea>
      </div>
    </div>

    <div class="col-md-2 d-flex justify-content-center align-items-center">
      <i class="fas fa-2x fa-arrow-circle-right text-success"></i>
    </div>

    <div class="col-sm-12 col-md-5">
      <div class="markdown-container">
        <div class="form-control marked" :style="'height: ' + textareaHeight + 'px;'" v-html="markdown"></div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['type', 'cardData', 'size'],
    data() {
      return {
        input: this.cardData,
        textareaHeight: 0
      }
    },
    computed: {
      markdown() { return marked(this.input, {sanitize: true}) },
      label() {
        switch(this.type) {
          case 'question':
            return 'Question'
          case 'answer':
            return 'Answer'
          default:
            return 'N/A'
        }
      }
    },
    mounted() {
      this.textareaHeight = this.$refs.textarea.offsetHeight
    }
  }
</script>
