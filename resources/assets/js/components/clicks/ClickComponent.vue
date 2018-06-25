<template>
    <div class="user-data">
        <h4 class="text-primary text-medium">{{user.username}}</h4>
        <a v-if="!show" @click.prevent="handleClick" class="btn see  btn-outline-success" href="#">View Contact Info <i class="icon-signal"></i></a>
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
        props: {
            service: {
                type: Number,
                required: true
            },
            user: {
                type: Object,
                required: true
            }
        },
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
                axios.post('/api/click', {
                    service_id:  this.service
                })
                .then(response => {
                    
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
        //     console.log(this.user);
        //     console.log(this.service);
        // }
    }
</script>

<style>
.shwbtn {
    color: #36f936 !important;
    font-weight: 500;
    cursor: pointer;
}

.see {
    font-weight: bold;
}
    
</style>