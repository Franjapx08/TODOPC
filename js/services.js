var domainApiVersion = "http://localhost/TODOPC/API/V1/";

export const getDatos = () => {
  return axios.post(domainApiVersion + "getBanners.php");
};
