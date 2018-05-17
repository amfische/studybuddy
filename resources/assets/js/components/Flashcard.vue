<template>
	<div class="card" style="height: 70%; width: 100%; margin: auto 0;">
		<div class="card-body d-flex align-items-center">
			<div class="card-text">{{ question }}</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				question: 'Click a question'
			}
		},
		mounted() {
			this.$root.$on('updateCard', (card) => {
				this.question = card.question
			})
		}
	}
</script>