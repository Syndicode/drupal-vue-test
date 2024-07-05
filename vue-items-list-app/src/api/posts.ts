import axios from 'axios';

const BASE_URL = `https://jsonplaceholder.typicode.com/`;

const getPosts = () => {
  return axios.get(`${BASE_URL}/posts`)
}

const getPost = (postId: number) => {
  return axios.get(`${BASE_URL}/posts/${postId}`)
}

export default {
  getPosts,
  getPost
};
