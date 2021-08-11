<template>
  <div class="bg-white p-3  card_info ">
    <div class="intro">
      <img
        class="h-12 w-12 rounded-full object-fill"
        :src="'http://127.0.0.1:8000' + apprenant.img"
        alt="Cool"
      />
      <p>{{ apprenant.full_name }}</p>
    </div>
    <div class="card_body">
      <div class="card_item">
        <svg
          class="h-5 w-5"
          version="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 512 512"
          style="enable-background:new 0 0 512 512;"
          xml:space="preserve"
        >
          <g>
            <g>
              <path
                d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
			c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
			C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
			s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"
              />
            </g>
          </g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
        </svg>
        <p class="mx-4">{{ apprenant.campus }}</p>
      </div>
      <div class="card_item">
        <svg
          class="h-5 w-5"
          version="1.1"
          id="Capa_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 512 512"
          style="enable-background:new 0 0 512 512;"
          xml:space="preserve"
        >
          <rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384" />
          <polygon
            style="fill:#CFD8DC;"
            points="256,296.384 448,448 448,148.672 "
          />
          <path
            style="fill:#F44336;"
            d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672
	l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"
          />
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
        </svg>
        <p class="mx-4">{{ apprenant.email }}</p>
      </div>
      <div class="card_item">
        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
          <path
            d="M19
                    19H5V8h14m-3-7v2H8V1H6v2H5c-1.11
                    0-2 .89-2 2v14a2 2 0 002 2h14a2 2
                    0 002-2V5a2 2 0 00-2-2h-1V1m-1
                    11h-5v5h5v-5z"
          ></path>
        </svg>
        <p class="mx-4">{{ apprenant.created_at }}</p>
      </div>
    </div>
    <!-- row 2 -->

    <div class="card_body">
      <div class="card_item">
        <svg
          class="h-5 w-5"
          version="1.1"
          id="Capa_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 31.685 31.685"
          style="enable-background:new 0 0 31.685 31.685;"
          xml:space="preserve"
        >
          <g>
            <path
              d="M22.507,0H9.175C7.9,0,6.87,1.034,6.87,2.309v27.07c0,1.271,1.03,2.306,2.305,2.306h13.332
		c1.273,0,2.307-1.034,2.307-2.306V2.309C24.813,1.034,23.78,0,22.507,0z M23.085,25.672H8.599V3.895h14.486V25.672z M18.932,2.343
		h-6.181V1.669h6.182L18.932,2.343L18.932,2.343z M21.577,2.035c0,0.326-0.266,0.59-0.591,0.59c-0.326,0-0.591-0.265-0.591-0.59
		s0.265-0.59,0.591-0.59C21.312,1.444,21.577,1.709,21.577,2.035z M18.655,29.225h-5.629v-1.732h5.629V29.225z"
            />
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
          </g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
        </svg>
        <p class="mx-4">{{ apprenant.telephon }}</p>
      </div>
      <div class="card_item">
        <svg
          class="h-5 w-5"
          id="Capa_1"
          enable-background="new 0 0 512.001 512.001"
          height="512"
          viewBox="0 0 512.001 512.001"
          width="512"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g>
            <path
              d="m15.001 421h75v45c0 8.284 6.716 15 15 15h392c8.284 0 15-6.716 15-15v-390c0-8.284-6.716-15-15-15h-75v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-76v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-75v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-76c-8.284 0-15 6.716-15 15v90c0 110.55-45.945 195.596-84.603 228.477-4.852 4.043-6.651 10.691-4.502 16.63 2.151 5.938 7.789 9.893 14.105 9.893zm467 30h-362v-30h287c3.509 0 6.907-1.23 9.603-3.477 18.032-15.019 45.963-50.777 65.397-96.575zm-362-360h61v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h75v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h76v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h60v60h-362zm-.257 89.99h361.991c-3.38 95.155-39.901 170.023-80.616 210.01h-351.999c46.133-58.781 68.149-135.318 70.624-210.01z"
            />
          </g>
        </svg>

        <p class="mx-4">{{ apprenant.date_N }}</p>
      </div>
      <div class="card_item">
        <svg
          class="h-5 w-5"
          version="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 512 512"
          style="enable-background:new 0 0 512 512;"
          xml:space="preserve"
        >
          <g>
            <g>
              <path
                d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
			c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
			C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
			s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"
              />
            </g>
          </g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
        </svg>
        <p class="mx-4">{{ apprenant.adresse }}</p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "AppShow",
  props: ["apprenant"],
};
</script>

<style scoped>
.card_info {
  box-shadow: 3px 7px 8px 2px #b4b4b47e;
  border-radius: 10px;
  width: 60%;
  margin: 10px auto 2%;
}
.intro {
  margin: 10px 10px;
  display: flex;
  justify-content: left;
}
.intro p {
  margin: 10px 10px;
}
.card_body {
  display: flex;
  flex-wrap: wrap;
  justify-items: center;
  justify-content: space-evenly;
}

.card_item {
  display: flex;
  justify-content: space-between;
  margin: 10px;
}
</style>
