<template>
  <div>
    <input type="checkbox" @click="contentMemorized" :checked="this.input">
  </div>
</template>

<script>
  export default {
    props: ['id','studied'],
    data() {
      return {
        input: this.studied,
      }
    },
    methods: {
      contentMemorized() {
        this.input = !this.input
        axios.put('http://localhost:8000/api/v1/flashcard-status-update', { checked: this.input, id: this.id })
          .then(function(response) {
            // console.log(response.data)
          })
          .catch(function(error) {
            // console.log(error)
          })
      }
    }
  }
</script>
