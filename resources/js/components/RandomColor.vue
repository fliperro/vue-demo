<template>
    <div class="max-w-xl space-y-2">

        <div v-bind:style="[ divStyle ]" class="p-4 border">

            <span v-text="divLabel"></span>

        </div>

        <div>

            <button
                :disabled="processing"
                @click="fetch"
                type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
            >
                Get Random Color
            </button>

        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                processing: false,
                color: null,
            }
        },

        computed: {

            divStyle() {
                return { 'background-color' : this.color || '#ffffff' };
            },
            divLabel() {
                return this.color || '#ffffff';
            }

        },

        methods: {

            fetch() {

                this.processing = true;

                axios.get('/example1')
                    .then( response => {
                        console.log(this.color);
                        this.color = response.data.color;
                    })
                    .catch( error => {
                        this.color = null
                        alert(error);
                    })
                    .then( () => {
                        this.processing = false;
                    });
            }

        }
    };
</script>
