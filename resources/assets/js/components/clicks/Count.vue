<template>
    <span>
        <small class="badge badge-pill badgebtn ">Clicks: {{ number }}</small>
    </span>
</template>

<script>
    import Bus from '../../bus';
    export default {
        props: {
            click: {
                type: Number,
                required: true
            }
        },
        data () {
            return {
                number: this.click
            }
        },
        mounted() {
            Bus.$on('viewed.contact', () => {
                alert('someone clicked your profile');
                // this.number = this.number - 5;
            });
        }
    }
    
</script>
<style>
    .badgebtn {
        background-color: #167921 !important;
    }
</style>

