<template>
    <div>
        <h1 v-text="getWorksCount()"></h1>
        <button v-on:click="setRow()">Toggle row</button>
        <h1>Row is long-short? {{ getRow() }}</h1>
        <h1>Component? {{ generateArticleRow() }} </h1>
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
            getWorksCount: function() {
                return this.works.length;
            },
            setRow: function() {
                this.rowLS = !this.rowLS;
            },
            getRow: function() {
                return this.rowLS;
            },
            generateArticleRow: function() {
                for (let i = 0; i < this.getWorksCount(); i++) {
                    if (this.getRow()) {
                        let component = '<article-row-long-short v-bind:work_one="works[0]" v-bind:work_two="works[1]"></article-row-long-short>';
                        this.works.shift();
                        this.works.shift();
                        return component;
                    }
                }
            }
        },
        data() {
            return {
                rowLS: true,
            }
        }
    };
</script>
