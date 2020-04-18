<template>
	<ul id="ideas-list">
		<li v-for="idea in list" v-bind:key="idea.id">
			<h2> {{ idea.title }} </h2>
			<p> {{ idea.description }} </p>
			<small> {{ humanTime(idea.created_at) }} </small>
		</li>
	</ul>
</template>

<script>
import axios from 'axios';
import moment from 'moment';
moment.lang('es')

export default {
	name: 'ideas-list',
	props: {
		list: Array
	},
	methods: {
		humanTime (date) {
			return moment(date).fromNow();
		}
	}
}
</script>