<template>
  <div class="layout">
    <Layout>
      <Header>
        <Menu mode="horizontal" theme="dark" active-name="1">
          <div class="layout-logo">TlhFormsWP</div>
          <div class="layout-nav" style="font-size: 17px;">
            <MenuItem name="1">
              <Icon size="20" type="md-cog" />
              Global Settings
            </MenuItem>
            <MenuItem name="2">
              <Icon size="20" type="md-document" />
              Page & Post Settings
            </MenuItem>
            <MenuItem name="3">
              <Icon size="20" type="md-eye" />
              Form Previewer
            </MenuItem>
          </div>
        </Menu>
      </Header>
      <Content>
        <Card>
          <div style="min-height: 600px; margin-top:">
            <Tabs value="name1">
              <TabPane label="Tab 1" name="name1">
                <Button type="primary" @click="modal1 = true"
                  >Display dialog box</Button
                >
                <Modal
                  v-model="modal1"
                  title="Common Modal dialog box title"
                  @on-ok="ok"
                  @on-cancel="cancel"
                >
                  <p>Content of dialog</p>
                  <p>Content of dialog</p>
                  <p>Content of dialog</p>
                </Modal>
              </TabPane>

              <TabPane label="Tab 2" name="name2">
                <Button type="primary" @click="open(false)">Open notice</Button>
                <!-- <Button @click="success(false)">Success</Button>                 -->
              </TabPane>

              <TabPane label="Tab 3" name="name3"> Tab 3 Content </TabPane>
            </Tabs>
          </div>
        </Card>
      </Content>
      <Footer class="layout-footer-center">The Learning House Web Team</Footer>
    </Layout>
  </div>
</template>

<script>
export default {
  data() {
    return {
      value: "",
      modal1: false
    };
  },

  methods: {
    ok() {
      this.$Message.info("Clicked ok");
    },
    cancel() {
      this.$Message.info("Clicked cancel");
    },

    /**
     * For Modal
     */
    success(nodesc) {
      this.$Notice.success({
        title: "Notification title",
        desc: nodesc
          ? ""
          : "Here is the notification description. Here is the notification description. "
      });
    },
    /**
     * For Notice Noticiation
     */
    open(nodesc) {
      this.$Notice.open({
        title: "Notification title",
        desc: nodesc
          ? ""
          : "Here is the notification description. Here is the notification description. "
      });
    }
  }
};
</script>
<style scoped>
.ivu-layout {
  min-height: 100vh;
}
.layout {
  border: 1px solid #d7dde4;
  background: #f5f7f9;
  position: relative;
  border-radius: 4px;
  overflow: hidden;
}
.layout-logo {
  width: 100px;
  height: 30px;
  background: #5b6270;
  border-radius: 3px;
  float: left;
  position: relative;
  top: 15px;
  left: 20px;
}
.layout-nav {
  max-width: 720px;
  margin: 0 auto;
  margin-right: 20px;
  display: flex;
}
.layout-footer-center {
  text-align: center;
}

.ivu-menu.ivu-menu-horizontal {
  display: flex;
}

@media (max-width: 767px) {
  #app .ivu-layout-content {
    padding: 35px 25px;
  }
}
.ivu-layout-content {
  padding: 50px;
}
</style>
