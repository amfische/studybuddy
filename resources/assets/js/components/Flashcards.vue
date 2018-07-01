<template>
  <div class="flex-container">
    <div class="card">
      <div class="card-header d-flex justify-content-between" :style="'background-color:' + category.color">
        <h2>{{ category.name }}</h2> 
        <h2>{{ currentIndex + 1 }} / {{ flashcards.length }}</h2>
      </div>
      <div class="card-body">
        <div v-if="showQuestion" v-html="question" class="question"></div>
        <div v-else v-html="answer" class="answer"></div>
      </div>
      <div class="card-footer">
        <button @click="previousCard">Previous</button>
        <button class="button" @click="nextCard">Next</button>
        <button @click="showQuestion = !showQuestion">Flip</button>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['category', 'allcards'],
    data() {
      return {
        showQuestion: true,
        currentIndex: 0,
        flashcards: this.allcards
      }
    },
    computed: {
      question() {
        return this.flashcards[this.currentIndex].question
      },
      answer() {
        return this.flashcards[this.currentIndex].answer
      }
    },
    methods: {
      nextCard() {
        this.showQuestion = true
        if (this.currentIndex === this.flashcards.length - 1) {
          this.currentIndex = 0
        } else {
          this.currentIndex++
        }
      },
      previousCard() {
        this.showQuestion = true
        if (this.currentIndex === 0) {
          this.currentIndex = this.flashcards.length - 1
        } else {
          this.currentIndex--
        }
      }
    },
    mounted() {
      this.$root.$on('updateOptions', (option) => {
        this.showQuestion = true
        this.currentIndex = 0
        if (option === 'all') {
          this.flashcards = this.allcards
        }
        if (option === 'unknown') {
          this.flashcards = this.allcards.filter(card => card.known === 0)
        }
      })
    }
  }
</script>

<style lang="scss" scoped>
  .flex-container {
    display: flex;
    align-items: center;
    margin-top: 50px;
    .card {
      flex-grow: 1;
      height: 64vh;
    }
    .card-header {
      color: #fff;
      height: 15%;
    }
    .card-body {
      height: 70%;
      div.question, div.answer {
        overflow: auto;
        height: 100%;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
      }
    }
    .card-footer {
      height: 15%;
    }
  }
</style>
