/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso.fitosanitario;

/**
 * @author ytorregl
 *
 */
public class TratamientoAplicado {
	
	private String nombreTratamiento;
	private String ingredienteActivo;
	private String concentracion;
	private String duracionTemperatura;
	private String nombreResponsable;
	private String fechaTratamiento;
	/**
	 * 
	 */
	public TratamientoAplicado() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param nombreTratamiento
	 * @param ingredienteActivo
	 * @param concentracion
	 * @param duracionTemperatura
	 * @param nombreResponsable
	 * @param fechaTratamiento
	 */
	public TratamientoAplicado(String nombreTratamiento, String ingredienteActivo, String concentracion,
			String duracionTemperatura, String nombreResponsable, String fechaTratamiento) {
		super();
		this.nombreTratamiento = nombreTratamiento;
		this.ingredienteActivo = ingredienteActivo;
		this.concentracion = concentracion;
		this.duracionTemperatura = duracionTemperatura;
		this.nombreResponsable = nombreResponsable;
		this.fechaTratamiento = fechaTratamiento;
	}
	/**
	 * @return the nombreTratamiento
	 */
	public String getNombreTratamiento() {
		return nombreTratamiento;
	}
	/**
	 * @param nombreTratamiento the nombreTratamiento to set
	 */
	public void setNombreTratamiento(String nombreTratamiento) {
		this.nombreTratamiento = nombreTratamiento;
	}
	/**
	 * @return the ingredienteActivo
	 */
	public String getIngredienteActivo() {
		return ingredienteActivo;
	}
	/**
	 * @param ingredienteActivo the ingredienteActivo to set
	 */
	public void setIngredienteActivo(String ingredienteActivo) {
		this.ingredienteActivo = ingredienteActivo;
	}
	/**
	 * @return the concentracion
	 */
	public String getConcentracion() {
		return concentracion;
	}
	/**
	 * @param concentracion the concentracion to set
	 */
	public void setConcentracion(String concentracion) {
		this.concentracion = concentracion;
	}
	/**
	 * @return the duracionTemperatura
	 */
	public String getDuracionTemperatura() {
		return duracionTemperatura;
	}
	/**
	 * @param duracionTemperatura the duracionTemperatura to set
	 */
	public void setDuracionTemperatura(String duracionTemperatura) {
		this.duracionTemperatura = duracionTemperatura;
	}
	/**
	 * @return the nombreResponsable
	 */
	public String getNombreResponsable() {
		return nombreResponsable;
	}
	/**
	 * @param nombreResponsable the nombreResponsable to set
	 */
	public void setNombreResponsable(String nombreResponsable) {
		this.nombreResponsable = nombreResponsable;
	}
	/**
	 * @return the fechaTratamiento
	 */
	public String getFechaTratamiento() {
		return fechaTratamiento;
	}
	/**
	 * @param fechaTratamiento the fechaTratamiento to set
	 */
	public void setFechaTratamiento(String fechaTratamiento) {
		this.fechaTratamiento = fechaTratamiento;
	}
	
	


}
