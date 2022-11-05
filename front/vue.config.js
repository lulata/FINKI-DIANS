const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: {
      "^/api": {
        pathRewrite: { "^/api": "/api" },
        target: "https://dians.sellora.ddcode.co/",
        changeOrigin: true,
      },
    },
  },
});
