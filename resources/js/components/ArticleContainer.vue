<template>
    <div>
        <button v-on:click="changeCurrentRow">Click me</button>
        <h1 v-text="currentRow"></h1>
        <div v-for="(work, index) in works">
           {{ index }} . {{ changed }}

        </div>
    </div>
</template>
<script>
    export default {
        props: {
            works: {
                type: Array
            },
        },
        methods: {
            changeCurrentRow: function() {
                if (this.currentRow === 'long-short')
                    this.currentRow = 'short-long';
                else
                    this.currentRow = 'long-short';
            }
        },
        computed: {
            changed: function() {
                this.changeCurrentRow();
                return this.currentRow;
            }
        },
        data() {
            return {
                currentRow: 'long-short'
            }
        }
    };
</script>
