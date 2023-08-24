const Sequelize = require("sequelize");
const db = new Sequelize("hidden", "root", "",
  { host: "localhost", dialect: "mysql", logging: true });

module.exports = {
  initDB: () => {
    return db.authenticate();
  },
  connSql: () => {
    return db;
  },
};

