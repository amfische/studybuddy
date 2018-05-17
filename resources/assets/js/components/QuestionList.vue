<template>
  <ul class="list-group">
    <li class="list-group-item" v-for="card in cards" v-text="card.question" @click="toggleCard(card)"></li>  
  </ul>
  
</template>

<script>
  export default {
    props: ['cards'],
    data() {
      return {
        // cards: {!! json_encode($cards) !!}
      }
    },
    methods: {
      toggleCard(card) {
        this.$root.$emit('updateCard', card)
      }
    }
  }
</script>
