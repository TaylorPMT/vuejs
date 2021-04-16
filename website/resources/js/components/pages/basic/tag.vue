<template>
    <div>
        <div class="content">
            <div class="container-fluid">

                <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
                <div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
                    <p class="_title0">Tags
                        <Button @click="addModal=true">
                            <Icon type="md-add"/>
                            Add Tag
                        </Button>
                    </p>

                    <div class="_overflow _table_div">
                        <table class="_table">
                            <!-- TABLE TITLE -->
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            <!-- TABLE TITLE -->


                            <!-- ITEMS -->
                            <tr>
                                <td>25-05-19</td>
                                <td class="_table_name">Manhattan's art center "Shed" opening ceremony</td>
                                <td>Economy</td>
                                <td>
                                    <Button type="info" size='small'>Info</Button>

                                    <Button type="error" size='small'>Error</Button>
                                </td>
                            </tr>


                        </table>
                    </div>
                </div>
                <Page :total="100"/>
                <modal
                    v-model="addModal"
                    title="Add Tag"
                    :mask-closable="false"
                >
                    <Input v-model="data.tagName" placeholder="Add Tag " style="width: 300px"/>

                    <div slot="footer">
                        <Button type="default" size='small' @click="addModal=false">Hủy</Button>
                        <Button type="primary" size='small' @click="addTag">Thêm</Button>

                    </div>
                </modal>
            </div>
        </div>
    </div>
</template>
<script>
import notice from '../../../mix/notice';

export default {
    mixins: [notice],
    data() {
        return {
            data: {
                tagName: '',
            },
            addModal: false,
            isAdding: false,
        }
    },
    methods: {
        async  addTag() {
            if (this.data.tagName.trim() === '')
                return this.info('hello', 'desc');
            const res = await this.callApi('post', '/app/create_tag', {
                tagName: this.data.tagName
            });
            if(res.status ==200){
                this.success('success','add');
            }else{
                console.log(res);
                this.error('error','error');
            }
        },
    },
    // async created() {
    //     const res = await this.callApi('post', '/app/create_tag', {
    //         tagName: 'testtag'
    //     });
    //
    //     if (res.status == 200) {
    //         console.log(res);
    //     } else {
    //         console.log(res);
    //     }
    // }
}
</script>
