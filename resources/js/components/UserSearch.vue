<template>
    <div>


        <!-- The Modal -->
        <div class="user-modal">
            <!-- Modal content -->
            <div class="user-modal-content">
                <div class="columns is-centered is-desktop is-vcentered ">
                    <div class="column is-gapless">

                        <div class="field">
                            <div>
                                <div class="control">
                                    <input style="height: 55px" class="input user-name" v-on:keyup="autoComplete"
                                           v-model="searchQuery"
                                           type="text" placeholder="Enter name here">
                                </div>
                                <div class="user-result" v-if="this.searchResults.length">
                                    <p class="user-option"
                                       v-for="result in searchResults">
                                        {{ result.name }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "UserSearch",
    data() {
        return {
            searchQuery: '',
            searchResults: []
        }
    },
    methods: {
        autoComplete() {
            let self = this;
            this.searchResults = [];

            if (this.searchQuery.length > 1) {
                this.searchResults = [];
                axios.get('/search', {params: {name: this.searchQuery}}).then(response => {
                    self.searchResults = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            }
        },
    },
    mounted() {
    }
}
</script>

<style scoped>
.user-result {
    margin-top: 10px;
    border-radius: 5px;
    background-color: #ffffff;
    font-size: 16px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    line-height: 2.13;
    letter-spacing: normal;
    text-align: left;
    color: #061941;
    padding: 25px
}

/* The Modal (background) */
.user-modal {
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
}

/* user-modal Content/Box */
.user-modal-content {
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    right: 15px;
    top: 15px;

    color: white;
    float: right;
}

.close:hover,
.close:focus {
    cursor: pointer;
}

.user-option {
    cursor: pointer;
}
</style>
