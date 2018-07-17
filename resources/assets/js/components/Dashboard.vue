<template>
    <div class="tasks-container">
        <div class="tasks-container__title">
            <h1>My tasks</h1>
            <hr>
        </div>
        <task-form></task-form>
        <nav class="menu">
            <span class="menu__item btn">Current task</span>
        </nav>
        <hr>
        <task-card></task-card>
    </div>
</template>

<script>
    import TaskForm from './Task-form'
    import TaskCard from './Task-card'

    export default {
        components: {
            TaskForm,
            TaskCard
        },
        directives: {
            'autofocus': {
                inserted(el) {
                    el.focus();
                }
            }
        }
    }
</script>