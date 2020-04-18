<template>
	<form v-on:submit.prevent="setIdea()" id="ideas-form">
		<h1>¿En que estas pensando?</h1>
		<label for="idea-title">Titulo
			<input v-model="idea.title" type="text" min="5" required>
		</label>
		<label for="idea-description">Descripción
			<textarea v-model="idea.description" name="idea-description" id="idea-description" cols="30" rows="10"></textarea>
		</label>
		<input type="submit" value="Añadir">
	</form>
</template>

<script>
import toastr from 'toastr';

export default {
	name: 'ideas-form',
	data () {
		return {
			idea: {
				title: '',
				description: ''
			}
		}
	},
	methods: {
		setIdea () {
			axios.post('/ideas', {
				'title': this.idea.title,
				'description': this.idea.description
			}).then(response => {
				toastr.success('Tarea Añadida');
				this.$emit('ideaAdded')
			});
		}
	}
}
</script>