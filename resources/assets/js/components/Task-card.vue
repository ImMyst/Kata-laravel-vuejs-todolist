<template>
    <div class="list-tasks">
        <div class="list-tasks__elements card" v-for="task in tasks">
            <div>
                <div class="list-tasks__title card-title">
                    <span>Task {{ task.id }}</span>
                    <div class="checkbox">
                        <label><input type="checkbox"></label>
                    </div>
                </div>
                <div class="list-tasks__content card-body">
                    <span v-if="task !== editingTask" @dblclick="editTask(task)" v-bind:title="message">{{ task.title }}</span>
                    <input class="input" v-if="task === editingTask" v-autofocus @keyup.enter="endEditing(task)" @blur="endEditing(task)" type="text" placeholder="New task" v-model="task.title">
                </div>
                <div class="list-tasks__button" >
                    <button v-on:click.prevent="deleteTask(task.id)" class="list-tasks__button--delete btn">Delete</button>
                </div>
            </div>
        </div>
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
                message: 'Double click for editing',
                tasks: [],
                task: {
                    id: '',
                    title: '',
                    is_done: ''
                },
                editingTask: {}
            }
        },

        mounted() {
            this.fetchTasks();
        },

        methods: {
            fetchTasks() {
                axios.get('/get-list').then(response => {
                    this.tasks = response.data
                });
            },

            deleteTask(id) {
                axios.delete('/delete-task/'+ id).then(response => {
                    console.log('Correctly deleting task !');
                }).catch(err => {
                    console.log(err.response);
                });
            },

            editTask(task) {
                this.editingTask = task;
            },
            endEditing(task) {
                this.editingTask = {};
                if (task.title.trim() === '') {
                    this.deleteTask(task.id);
                } else {
                    axios.post('/edit-task', task).then(response => {
                        console.log('Editing task is successful!')
                    }).catch(err => {
                        console.log(err.response.data);
                    });
                }
            }
        }
    }
</script>