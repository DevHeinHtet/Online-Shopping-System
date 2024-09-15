import axios from "axios";

const baseUrl = "http://127.0.0.1:8000/api/v1";

const token = localStorage.getItem("token");

// required request
const requests = {
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`,
    },
};

// api get methods
const get = (url, paramsData = null) => {
    return axios.get(`${baseUrl}${url}`, {
        headers: requests.headers,
        params: paramsData,
    });
};

// api post methods
const post = (url, data) => {
    return axios.post(`${baseUrl}${url}`, data, requests);
};

// decate using methods to use
export default {
    get,
    post,
};
