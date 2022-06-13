<template>
    <div class="max-w-xl space-y-2">

        <div>
            <input type="text" v-model="firstName" class="shadow-sm block w-full sm:text-sm border-gray-300 rounded-md" placeholder="firstname">
        </div>

         <div>
            <input type="text" v-model="lastName" class="shadow-sm block w-full sm:text-sm border-gray-300 rounded-md" placeholder="lastname">
        </div>

        <div>

            <button
                :disabled="processing"
                @click="fetch"
                type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
            >
                Generate Card
            </button>

        </div>

        <div>
            <p class="text-red-600" v-text="error"></p>
        </div>

        <div v-html="responseHtml"></div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                processing: false,

                firstName: 'John',
                lastName: 'Doe',

                error: '',

                responseHtml: ''
            }
        },

        methods: {

            fetch() {

                this.processing = true;
                this.error = '';

                axios.post('/example3',
                    {
                        firstname: this.firstName,
                        lastname: this.lastName
                    })
                    .then( response => {
                        this.responseHtml = response.data.html;
                    })
                    .catch( error => {
                        if(error.response.status == 422) {
                            this.error = error.response.data.message;
                        }

                        this.responseHtml = '';
                    })
                    .then( () => {
                        this.processing = false;
                    });
            }

        }
    };
</script>
