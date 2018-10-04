<?php

include 'DemoEntityInterface.php';

class DemoEntity implements DemoEntityInterface {
  private $name;
  private $createdTime;
  private $published;

  /**
   * Gets the Demo entity name.
   *
   * @return string
   *   Name of the Demo entity.
   */
  public function getName() {
      return (string) $this->name;
  }

  /**
   * Sets the Demo entity name.
   *
   * @param string $name
   *   The Demo entity name.
   *
   * @return DemoEntityInterface
   *   The called Demo entity entity.
   */
  public function setName($name) {
      $this->name = $name;
      return $this;
  }

  /**
   * Gets the Demo entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Demo entity.
   */
  public function getCreatedTime() {
      return (int) $this->createdTime;
  }

  /**
   * Sets the Demo entity creation timestamp.
   *
   * @param int $timestamp
   *   The Demo entity creation timestamp.
   *
   * @return DemoEntityInterface
   *   The called Demo entity entity.
   */
  public function setCreatedTime($timestamp) {
      $this->createdTime = $timestamp;
      return $this;
  }

  /**
   * Returns the Demo entity published status indicator.
   *
   * Unpublished Demo entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Demo entity is published.
   */
  public function isPublished() {
    return (bool) $this->published;
  }

  /**
   * Sets the published status of a Demo entity.
   *
   * @param bool $published
   *   TRUE to set this Demo entity to published, FALSE to set it to unpublished.
   *
   * @return DemoEntityInterface
   *   The called Demo entity entity.
   */
  public function setPublished($published) {
    $this->published = $published;
    return $this;
  }
}
  
