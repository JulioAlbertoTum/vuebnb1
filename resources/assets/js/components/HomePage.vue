<template>
	<div class="home-container">
		<listing-summary-group v-for="(group, country) in listing_groups" 
			:key="country"
			:listings="group"
			:country="country"
			class="listing-summary-group">
		</listing-summary-group>
	</div>
</template>

<script>
	
	
	// import axios from 'axios';
	// let serverData = JSON.parse(window.vuebnb_server_data);
	// let listing_groups = groupByCountry(serverData.listings);
	import routeMixin from '../route-mixin';
	import ListingSummaryGroup from './ListingSummaryGroup.vue';
	import { groupByCountry } from '../helpers';

	export default {
		mixins: [ routeMixin ],
		data() {
			return { listing_groups: [] };
		},
		methods: {
			assignData({ listings }){
				this.listing_groups = groupByCountry(listings);
			},
		},
		components: {
			ListingSummaryGroup
		},
		// beforeRouteEnter(to, from, next) {
		// 	let serverData = JSON.parse(window.vuebnb_server_data);
		// 	if (to.path === serverData.path) {
		// 		let listing_groups = groupByCountry(serverData.listings);
		// 		next(component =>  component.listing_groups = listing_groups);
		// 	} else { 
		// 		axios.get(`/api/`).then(({ data }) => {
		// 			let listing_groups = groupByCountry(data.listings);
		// 			next(component => component.listing_groups = listing_groups);
		// 		});
		// 	}
		// }
	}
</script>

<style>
	/*.home-container {
		margin: 0 auto;
		padding: 0 25px;
	}

	@media (min-width: 1131px) {
		.home-container {
			width: 1080px;
		}
	}

	.listing-summary-group {
		padding-bottom: 20px;
	}

	.listing-summaries {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		overflow: hidden;
	}

	.listing-summaries > .listing-summary {
		margin-right: 15px;
	}

	.listing-summaries > .listing-summary:last-child {
		margin-right: 0;
	}*/
</style>