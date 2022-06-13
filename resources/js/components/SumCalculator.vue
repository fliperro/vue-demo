<template>
    <div class="max-w-xl space-y-2">

        <div>
            <input type="number" v-model="firstNumber" class="shadow-sm block w-full sm:text-sm border-gray-300 rounded-md" placeholder="first number">
        </div>

         <div>
            <input type="number" v-model="secondNumber" class="shadow-sm block w-full sm:text-sm border-gray-300 rounded-md" placeholder="second number">
        </div>

        <div>

            <button
                :disabled="processing"
                @click="fetch"
                type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
            >
                Calculate sum
            </button>

        </div>

        <div>
            <p v-text="resultMessage"></p>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                firstNumber: '',
                secondNumber: '',
                processing: false,
                resultMessage: '',
            }
        },

        methods: {

            fetch() {

                this.processing = true;
                this.resultMessage = '';

                axios.post('/example2',
                    {
                        firstNumber: this.firstNumber,
                        secondNumber: this.secondNumber
                    })
                    .then( response => {
                        this.resultMessage = response.data.sum;
                    })
                    .catch( error => {
                        if(error.response.status == 422) {
                            this.resultMessage = error.response.data.message;
                        }
                    })
                    .then( () => {
                        this.processing = false;
                    });
            }

        }
    };
</script>
