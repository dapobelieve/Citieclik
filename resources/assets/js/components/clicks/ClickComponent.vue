<template>
    <div class="user-data">
        <h4 class="text-primary text-medium">{{user.username}}</h4>
        <span v-if="!show" class="shwbtn" @click.prevent="handleClick">Contact info</span>
        <span v-if="show">
            <h6>{{user.phone}}</h6>
            <h6>{{user.email}}</h6>
        </span>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                show: false
            }
        },
        props: ['user', 'service'],
        methods: {
            handleClick () {
                if(Laravel.user.id === this.service.user_id){
                    alert('Come on, you already know your contact information')
                    return;
                }
                this.show = true;
                this.send();               
            },
            send () {
                axios.post('api/click', {
                    user_id:     Laravel.user.id,
                    service_id:  this.service.id
                })
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                })
            }
        },
        // mounted () {
        //     console.log(this.userimage);
        // }
    }
</script>

<style>
.shwbtn {
    color: green;
    font-weight: 600;
    padding: 0.4rem 1.3rem;
    text-decoration: none;
    cursor: pointer;
}
    
</style>