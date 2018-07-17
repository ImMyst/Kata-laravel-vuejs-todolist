<template>
    <div class="form-add-task">
        <form v-on:submit.prevent="createTask" class="form-add-task__content form-group">
            <input type="text" class="form-add-task__input form-control" placeholder="New Task" required v-model="task.title">
            <button class="form-add-task__button btn btn-default">Add task</button>
        </form>
    </div>
</template>

<script>
    export default {
        directives: {
            'autofocus': {
                inserted(el) {
                    el.focus();
                }
            }
        },
        data() {
            return {
                tasks: [],
                task: {
                    id: '',
                    title: '',
                    is_done: ''
                }
            }
        },
        methods: {
            createTask() {
                axios.post('/create-task', this.task).then(response => {
                    this.task.title = '';
                    console.log('Correctly adding task !');
                }).catch(err => {
                    console.log(err.response);
                });
            }
        }
    }
</script>