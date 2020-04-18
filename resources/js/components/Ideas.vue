<template>
	<div id="ideas">
		<ideas-form v-on:ideaAdded="getIdeas()"></ideas-form>
		<hr>
		<ideas-list  :list="ideas"></ideas-list>
	</div>
</template>

<script>
import Form from './Form.vue';
import List from './List.vue';

export default {
	name: 'ideas',
	data () {
		return {
			ideas: []
		}
	},
	components: {
		'ideas-form': Form,
		'ideas-list': List
	},
	methods: {
		getIdeas () {
			axios.get('/ideas').then(respose => {
				this.ideas = respose.data;
			});
		}
	},
	created () {
		this.getIdeas();
	}
}
</script>