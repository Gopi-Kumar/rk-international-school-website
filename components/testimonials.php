
<div class="wrapper testimonials">
      <h3>Community Feedback</h3>
      <div class="testimonial-container" id="testimonial-container"></div>
      <div class="btns">
      <button id="prev">&lt;</button>
      <button id="next">&gt;</button>
      </div>
</div>


<script>
    const testimonials = [
      {
    name: "Dinesh Bhardwaj",
    job: "Former Captain of Indian Kabbadi Team, Arjun Awardee",
    image: "assets/images/dinesh-bhardwaj.jpg",
    testimonial:
      'R K International school focuses equally on curricular and academics of the students for the overall development.',
  },
  
  {
    name: "Kajal & Family",
    job: "XII Humanities",
    image: "https://ropanitours.com/wp-content/uploads/2021/09/user-placeholder.jpg",
    testimonial:
      'R K INTERNATIONAL SCHOOL has helped me raise my children. The teachers are really good and dedicated. I will always be grateful to this wonderful school. "With your guidance our daughter has developed into a confident and capable child. Thank you for being such an important part in our child\'s development". The teachers are NURTURING and LOVING while providing the structure and guidance my kids need. I have been impressed at the level of feedback and overall communication.',
  },
  {
    name: "Yash Chauhan & Family",
    job: "X Mercury",
    image: "https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_640.png",
    testimonial:
      "R K International School not only focuses on improving my son’s areas of need but also really puts a huge emphasis on bolstering his individual strengths. My child has grown in a way that he never would have at another school due to this excellent individualized and warm environment. The teachers are highly educated, thoughtful and nurturing. They provide rigorous academic challenges, as well as the tools and strategies needed to meet those challenges. I am so pleased",
  },
  {
    name: "Shweta Shrivastav",
    job: "",
    image: "https://lh3.googleusercontent.com/a-/AD5-WCkEAYaoQY5m327E4lFofRPYAMEXi5Y-S6V-6Jox1A=w75-h75-p-rp-mo-br100",
    testimonial:
      "The best school in city...my kids are studying here.very discipline environment and cooperative teachers...",
  },
  {
    name: "Rohit Puri",
    job: "",
    image: "https://lh3.googleusercontent.com/a-/AD5-WCnyma-0_3frppVVzPUgi1NH4poFRLBRCb9O4OOxZg=w75-h75-p-rp-mo-br100",
    testimonial:
      "If you are really concerned about your future always remember R K International School.... Best affordable and quality education....!!",
  },
  
 
];
//Current Slide
let i = 0;
//Total Slides
let j = testimonials.length;
let testimonialContainer = document.getElementById("testimonial-container");
let nextBtn = document.getElementById("next");
let prevBtn = document.getElementById("prev");
nextBtn.addEventListener("click", () => {
  i = (j + i + 1) % j;
  displayTestimonial();
});
prevBtn.addEventListener("click", () => {
  i = (j + i - 1) % j;   
  displayTestimonial();
});
let displayTestimonial = () => {
  testimonialContainer.innerHTML = `
    <img src=${testimonials[i].image}>
    <p>${testimonials[i].testimonial}</p>
    <h3>${testimonials[i].name}</h3>
    <h6>${testimonials[i].job}</h6>
  `;
};
window.onload = displayTestimonial;

setInterval(() => {
  i = (j+i+1)%j
  displayTestimonial();
}, 30000);


</script>