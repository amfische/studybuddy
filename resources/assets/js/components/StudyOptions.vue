<template>
	<div class="card-container d-flex flex-column justify-content-center">
		<div class="card">
			<div class="card-header bg-info text-white">Study Options</div>
			<div class="card-body">
				<div class="form-group d-flex justify-content-between align-items-center" @click="toggle('all')">
					<label for="all">All Cards</label>
					<input type="radio" id="all" name="options" value="all" v-model="selected">
				</div>
				<div class="form-group d-flex justify-content-between align-items-center" @click="toggle('unknown')">
					<label for="unknown">Unknown Cards</label>
					<input type="radio" id="unknown" name="options" value="unknown" v-model="selected">
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				selected: 'all'
			}
		},
		methods: {
			toggle(option) {
				this.selected = option
				this.$root.$emit('updateOptions', option)
			}
		}
	}
</script>

<style lang="scss" scoped>
	.card-container {
		margin-top: 50px;
		height: 64vh;
	}
	.card {
		font-family: 'Roboto', sans-serif;
		.card-body {
			padding: 0;
		}
	}
	.form-group {
		margin: 0;
		padding: 1.25rem;
		&:hover {
			cursor: pointer;
			background-color: #c3c3c3;
		}
		label:hover,
		input:hover {
			cursor: pointer;
		}
		&:first-child {
			border-bottom: 1px solid rgba(0, 0, 0, 0.125);
		}
	}
	
</style>