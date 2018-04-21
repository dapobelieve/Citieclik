<template>
    <span>
        <small class="badge badge-pill badge-warning">Clicks: {{ number }}</small>
    </span>
</template>

<script>
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
            this.number = this.number - 5;
        });
    }
}
    
</script>

