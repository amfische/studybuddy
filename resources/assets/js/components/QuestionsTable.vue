<template>
	<div>

		<table class="table table-bordered">
			<colgroup>
				<col style="width: 7%">
				<col style="width: 72%">
				<col style="width: 7%">
				<col style="width: 7%">
				<col style="width: 7%">
			</colgroup>
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Question</th>
					<th scope="col">Known</th>
					<th scope="col">Review/Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-center" v-for="(card, index) in paginatedCards">
					<td>{{ index + 1 }}</td>
					<td v-html="card.question"></td>
					<!-- <td>{{card.question}}</td> -->
					<td>
						<checkmark :id="card.id" :studied="card.known"></checkmark>
					</td>
					<td>
						<a :href="'/categories/' + card.category_id + '/flashcard/' + card.id">
							<i class="fas fa-edit"></i>
						</a>
					</td>
					<td><i class="fas fa-trash-alt"></i></td>
				</tr>
			</tbody>
		</table>

	  <ul class="pagination pagination-sm">
	    <li class="page-item" :class="{'disabled': pageNumber === 0}">
	    	<span class="page-link" @click="previousPage">Previous</span>
	    </li>
	    <li class="page-item" :class="{'active': pageNumber === page - 1}" v-for="page in pages">
	    	<span class="page-link" @click="changePage(page)">{{ page }}</span>
	    </li>
	    <li class="page-item" :class="{'disabled': pageNumber === pages - 1}">
	    	<span class="page-link" @click="nextPage">Next</span>
	    </li>
	  </ul>

	</div>
</template>

<script>
	import Checkmark from './Checkmark.vue';

	export default {
		props: ['cards'],
		data() {
			return {
				resultsPerPage: 5,
				pageNumber: 0
			}
		},
		computed: {
			pages() {
				return Math.ceil(this.cards.length / this.resultsPerPage)
			},
			paginatedCards() {
				let start = this.pageNumber * this.resultsPerPage
				let end = start + this.resultsPerPage
				return this.cards.slice(start, end)
			}
		},
		methods: {
			previousPage() {
				if (this.pageNumber > 0) {
					this.pageNumber--
				}
			},
			nextPage() {
				if (this.pageNumber < this.pages - 1) {
					this.pageNumber++
				}
			},
			changePage(page) {
				this.pageNumber = page - 1
			}
		}
	}
</script>

<style lang="scss">
	.table {
		margin-top: 2rem;
	}
</style>