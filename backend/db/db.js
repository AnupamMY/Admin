const { MongoClient, ServerApiVersion } = require("mongodb");

const url = "mongodb://localhost:27017/chat";

const client = new MongoClient(url,  {
        serverApi: {
            version: ServerApiVersion.v1,
            strict: true,
            deprecationErrors: true,
        }
    }
);

const connectDb = async () => {
  try {
    await client.connect();
    await client.db("admin").command({ ping: 1 });
    console.log("You successfully connected to MongoDB!");
  } finally {
    await client.close();
  }
}

module.exports = connectDb;