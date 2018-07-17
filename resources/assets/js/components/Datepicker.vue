<template>

    <div class="navbar-item" id="date_picker">
        <datepicker placeholder="New date"  v-model="date" input-class="input"></datepicker>
    </div>

</template>

<script>
    import Datepicker from "vuejs-datepicker/dist/vuejs-datepicker.esm";

    export default {
        directives: {
            'autofocus': {
                inserted(el) {
                    el.focus();
                }
            }
        },
        components: {
            Datepicker
        },
        data() {
            return {
                date: new Date()
            }
        }
    }
</script>