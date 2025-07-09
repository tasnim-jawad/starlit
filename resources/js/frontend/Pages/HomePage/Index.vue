<template>
  <!-- Header Single Section Start here -->
  <!-- Header Single Section Start here -->
  <div class="header-style-05">
    <!-- Mobile Supported Navbar Start -->
    <Header />
    <!-- Mobile Supported Navbar End -->
    <!-- Banner Section Area Start Here -->
    <!-- Banner Section Area Start Here -->
    <BannerSection />
    <!-- Banner Section Area End Here -->
    <!-- Banner Section Area End Here -->
  </div>
  <!-- Header Single Section Start here -->
  <!-- Header Single Section Start here -->

  <!-- Services Single Section Start here -->
  <!-- Services Single Section Start here -->
  <ServiceSection />
  <!-- Services Single Section Start here -->
  <!-- Services Single Section Start here -->

  <!-- Why Choose us secion Start here -->
  <!-- Why Choose us secion Start here -->
  <WhyChoseUs />
  <!-- Why Choose us secion End here -->
  <!-- Why Choose us secion End here -->

  <!-- Our Principle Section Start here -->
  <!-- Our Principle Section Start here -->
  <OurPrinciple />
  <!-- Our Principle Section End here -->
  <!-- Our Principle Section End here -->

  <!-- Our Journey Section Start Here -->
  <!-- Our Journey Section Start Here -->
  <OurJourney />
  <!-- Our Journey Section End Here -->
  <!-- Our Journey Section End Here -->

  <!-- Media section Start here -->
  <!-- Media section Start here -->
  <MediaCoverage />
  <!-- Media section end here -->
  <!-- Media section end here -->

  <!-- Donation Section Start -->
  <!-- Donation Section Start -->
  <Donation />
  <!-- Donation Section End -->
  <!-- Donation Section End -->

  <!-- Testimonial Section-02 Start -->
  <!-- Testimonial Section-02 Start -->
  <Testimonial />
  <!-- Testimonial Secition-02 End -->
  <!-- Testimonial Secition-02 End -->

  <!-- News Section Start -->
  <!-- News Section Start -->
  <News />
  <!-- News Section End  -->
  <!-- News Section End  -->

  <!-- footer area start -->
  <!-- footer area start -->
  <Footer />
  <!-- footer area end -->
  <!-- footer area end -->

  <!-- back to top area start -->
  <!-- back to top area start -->
  <BackToTop />
  <!-- back to top area end -->
  <!-- back to top area end -->

  <!-- Vote poll start here -->
  <!-- Vote poll start here -->
  <VotePooll />
  <!-- Vote poll start here -->
  <!-- Vote poll start here -->
</template>

<script>
import BannerSection from "./Components/BannerSection.vue";
import BackToTop from "../../CommonComponents/BackToTop.vue";
import VotePooll from "../../CommonComponents/VotePooll.vue";
import Footer from "../../Shared/Footer.vue";
import Donation from "./Components/Donation.vue";
import Header from "../../Shared/Header.vue";
import MediaCoverage from "./Components/MediaCoverage.vue";
import News from "./Components/News.vue";
import OurJourney from "./Components/OurJourney.vue";
import OurPrinciple from "./Components/OurPrinciple.vue";
import ServiceSection from "./Components/ServiceSection.vue";
import Testimonial from "./Components/Testimonial.vue";
import WhyChoseUs from "./Components/WhyChoseUs.vue";

export default {
  components: {
    Header,
    BannerSection,
    ServiceSection,
    Donation,
    OurPrinciple,
    OurJourney,
    MediaCoverage,
    Testimonial,
    WhyChoseUs,
    News,
    Footer,
    VotePooll,
    BackToTop,
  },
};
</script>

<style scoped></style>
