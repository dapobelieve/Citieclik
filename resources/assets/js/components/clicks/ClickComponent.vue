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
    import Bus from '../../bus';

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
                
                this.send();               
            },
            send () {
                axios.post('api/click', {
                    user_id:     Laravel.user.id,
                    service_id:  this.service.id
                })
                .then(response => {
                    this.show = true;
                    // fire an event here
                    Bus.$emit('viewed.contact');
                    
                    // console.log(response.data);
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
    color: #36f936 !important;
    font-weight: 500;
    cursor: pointer;
}
    
</style>